#!/usr/local/bin/python3

import urllib.request
from urllib.parse import urlencode
import json

# These should be changed.
cloudflareEmail = "EMAIL-ADDRESS"
cloudflareAPIkey = "YOUR-API-KEY"
baseDomain = "YOURDOMAIN.COM"
subDomain = "SUBDOMAIN"

# These should NOT be changed.
recordType = "A"
zoneID = ""
dnsID = ""

# Get the zoneID from CloudFlare.
headers = {'X-Auth-Key': cloudflareAPIkey, 'X-Auth-Email': cloudflareEmail, 'Content-Type': "application/json"}
req = urllib.request.Request("https://api.cloudflare.com/client/v4/zones/", headers=headers)
for item in json.loads(urllib.request.urlopen(req).read().decode("utf-8"))["result"]:
    if item["name"] == baseDomain:
        zoneID = item["id"]
        break

# Find the IP address that CloudFlare has for your (sub)domain based on the recordName and recordType
data = {"type": recordType, "name": subDomain + "." + baseDomain}
req = urllib.request.Request("https://api.cloudflare.com/client/v4/zones/" + zoneID + "/dns_records?%s" % urlencode(data), headers=headers)
response = json.loads(urllib.request.urlopen(req).read().decode("utf-8"))["result"][0]
IPFromCF = response["content"]
dnsID = response ["id"]

# Get your current device IP Address
response = json.loads(urllib.request.urlopen("http://ip-api.com/json").read().decode("utf-8"))
ActualIP = response["query"]

if IPFromCF != ActualIP:
    # Update with Cloudflare
    data = {"type": recordType, "name": subDomain + "." + baseDomain, "content": ActualIP}
    req = urllib.request.Request("https://api.cloudflare.com/client/v4/zones/" + zoneID + "/dns_records/" + dnsID, headers=headers, data=json.dumps(data).encode("utf-8"),  method='PUT')
    success = json.loads(urllib.request.urlopen(req).read().decode("utf-8"))["success"]
    if success:
        # You can run some code on success.
        pass
    else:
        # You can run some code on error.
        pass
