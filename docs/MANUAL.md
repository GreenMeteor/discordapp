# End User Manual

### Setup
1. Go into your Discord server settings, under Widget you'll see your server id (Will be needed!) place the server id after this url `https://discordapp.com/widget?id=` or `https://discord.com/widget?id=` and follow the next step
2. In `ACP --> Discord Settings` place your Discord Widget URL in the configuration option then save and now you're done.

### CSP
- Requires frame-src `https://discordapp.com` & `https://discord.com` in case you've overwritten the default csp header.

```php
"frame-src" => [
   "self" => true,
   "allow" => [
       'https://discordapp.com', 'https://discord.com'
   ]
],
```
