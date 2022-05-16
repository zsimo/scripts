#### prevent MIME-Sniffing [see](https://knowledge-base.secureflag.com/vulnerabilities/security_misconfiguration/lack_of_content_type_headers_vulnerability.html)
```http
X-Content-Type-Options: nosniff
```


#### manage `referer` header [see](https://knowledge-base.secureflag.com/vulnerabilities/security_misconfiguration/incorrect_referrer_policy_vulnerability.html)
```html
<a href="http://attacker.com/trigger.html" target="_blank" rel="noreferrer noopener">Click</a>
```


#### Content Security Policy (CSP) [see](https://knowledge-base.secureflag.com/vulnerabilities/security_misconfiguration/incorrect_content_security_policy_vulnerability.html)
Start with a very tight CSP rule set, and then increasingly relax the restrictions according to what is and isn’t required by the web application.
CSP can be added either via an HTTP header or <meta> tag
```html
Content-Security-Policy: default-src 'none';
#or
<meta http-equiv="Content-Security-Policy" content="default-src 'none'">
```


