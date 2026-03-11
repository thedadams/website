#!/usr/bin/python3

import json
import urllib.request
from urllib.parse import urlencode

# These should be changed.
cloudflare_api_key = "xMIkUbaXaW1FmnBtkS2FIbadnM-k5Rgg_K-AQYwA"
base_domain = "thedadams.com"
sub_domain = "office"

# These should NOT be changed.
record_type = "A"
zone_id = ""
dns_id = ""

# Get the zoneID from CloudFlare.
headers = {
    "Authorization": "Bearer " + cloudflare_api_key,
    "Content-Type": "application/json",
    "Accept": "application/json",
}
req = urllib.request.Request(
    "https://api.cloudflare.com/client/v4/zones/", headers=headers
)
for item in json.loads(urllib.request.urlopen(req).read().decode("utf-8"))["result"]:
    if item["name"] == base_domain:
        zone_id = item["id"]
        break

# Find the IP address that CloudFlare has for your (sub)domain based on the recordName and recordType
data = {"type": record_type, "name": sub_domain + "." + base_domain}
req = urllib.request.Request(
    "https://api.cloudflare.com/client/v4/zones/"
    + zone_id
    + "/dns_records?%s" % urlencode(data),
    headers=headers,
)
response = json.loads(urllib.request.urlopen(req).read().decode("utf-8"))["result"][0]
ip_from_cf = response["content"]
dns_id = response["id"]

# Get your current device IP Address
response = json.loads(
    urllib.request.urlopen("http://ip-api.com/json").read().decode("utf-8")
)
actual_ip = response["query"]

if ip_from_cf != actual_ip:
    # Update with Cloudflare
    data = {
        "type": record_type,
        "name": sub_domain + "." + base_domain,
        "content": actual_ip,
    }
    req = urllib.request.Request(
        "https://api.cloudflare.com/client/v4/zones/"
        + zone_id
        + "/dns_records/"
        + dns_id,
        headers=headers,
        data=json.dumps(data).encode("utf-8"),
        method="PUT",
    )
    success = json.loads(urllib.request.urlopen(req).read().decode("utf-8"))["success"]
    if success:
        # You can run some code on success.
        pass
    else:
        # You can run some code on error.
        pass
