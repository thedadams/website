---
layout: post
title: "Running Gleam in a Codex Environment"
date: 2026-03-16
tags: ["programming", "gleam", "codex"]
updated: "03/17/2026"
author: "Donnie"
---
I've recently been exploring the Gleam programming language. Gleam is a statically typed language that compiles to Erlang, and it's designed for building scalable and maintainable applications. As is the case with many programmers these days, I wanted to explore using Codex to build a proof-of-concept for an idea I had. It turned out that setting up a Codex Environment was much more involved than I expected. This post walks through the issues I ran into and the exact configuration required to make Gleam work inside a Codex environment.

Codex allows you to create environments for your repositories so that Codex has everything it needs to build, run, and test the code when you ask it to complete a task. In the Codex web interface, click the gear icon in the top right, then click "Environments" in the left sidebar, and then "Create Environment". Select the repository you want to work with, give the environment a name, and then you have the ability to provide a setup script. By default, Codex will run an "Automatic" setup script that installs common packages. Gleam is not included in the automatic setup, so you need to provide a "Manual" setup script. This is where things start getting tricky.

The first issue is that gleam is not bundled into `apt` for Ubuntu, so installing it to give Codex the ability to run tests and build the code was not straightforward. There are three ways of installing Gleam on Ubuntu: `brew`, `asdf`, and `precompiled binaries`. As a macOS user, I am comfortable with `brew`, so I started there. The issue is that the container that the Codex environment uses is underpowered, and installing `brew` plus all the dependencies would sometimes cause the setup script to timeout. So, I moved onto the precompiled binaries.

The Gleam documentation has steps to install Gleam on Ubuntu using the precompiled binaries: download the binary from GitHub, download the checksum file, verify the checksum, extract the binary, make it executable, move it to `/usr/bin`, and, finally, install the Erlang dependencies. Nothing a simple bash script couldn't handle. Here it is:

```bash
apt update
apt install -y erlang-dev rebar3

wget https://github.com/gleam-lang/gleam/releases/download/v1.15.1/gleam-v1.15.1-x86_64-unknown-linux-musl.tar.gz
wget https://github.com/gleam-lang/gleam/releases/download/v1.15.1/gleam-v1.15.1-x86_64-unknown-linux-musl.tar.gz.sha256

if ! sha256sum -c gleam-v1.15.1-x86_64-unknown-linux-musl.tar.gz.sha256; then
exit 1
fi

tar xf gleam-v1.15.1-x86_64-unknown-linux-musl.tar.gz
chmod +x gleam
mv gleam /usr/bin/

gleam deps download
```

The issue is that, the last command in that script would fail with the following error (envoy is one of the dependencies for my project):

```
error: HTTP error

A HTTP request failed.
The error from the HTTP client was:

error sending request for url (https://repo.hex.pm/tarballs/envoy-1.1.0.tar)
```

This was confusing because the Codex interface states that network access is always enabled during the setup step.

After debugging with the Codex interactive terminal, I figured out that the container Codex was using has a proxy configured, and the certificate for said proxy is not trusted by the `gleam` CLI. Thankfully, the Gleam CLI reads the `GLEAM_CACERTS_PATH` environment variable to read additional certificates. So, in the Codex environment configuration, adding the `GLEAM_CACERTS_PATH` environment variable with value `/usr/local/share/ca-certificates/envoy-mitmproxy-ca-cert.crt` does the trick! After doing that, the `gleam deps download` command worked without any issues.

Now, we actually want the `gleam deps download` command to run for resumed containers as well. To do that, we can add the command to the "Maintenance script" section of the Codex environment configuration. This way, every time the container is created or resumed, it will ensure that all dependencies are downloaded and up to date.
