#### edit configs
```bash
sudo vim /etc/nginx/conf.d/site.com.conf
sudo vim /etc/nginx/sites-available/default
```

#### www dir
```bash
cd /var/www/
```

#### start / stop
```bash
sudo service nginx start
sudo service nginx stop
sudo service nginx reload
# or
sudo systemctl restart nginx
```

#### test configs
```bash
sudo /usr/sbin/nginx -t
```


#### proxy pass to node
```nginx
location / {
    proxy_pass http://127.0.0.1:3000;
}
location /dashboard {
    rewrite ^/dashboard/(.*)$ /$1 break;
    proxy_pass http://127.0.0.1:3001;
}
```

#### proxy pass to node api
```nginx
location /api {
    proxy_set_header X-Real-IP $remote_addr;
    proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
    proxy_set_header Host $http_host;
    proxy_set_header X-NginX-Proxy true;
    rewrite ^/api/?(.*) /$1 break;
    proxy_pass http://127.0.0.1:3000/;
    proxy_redirect off;
}
```

#### permanent (301) redirect
```nginx
location /help {
    return 301 https://developer.mozilla.org/en-US/;
}
```

#### subdomain
```nginx
server {
        listen 80;    
listen [::]80; # IPV6 notation

       server_name test.jemisthe.best;

        location / {
           proxy_pass http://localhost:3000;
          }
}

```

#### show logs
```bash
sudo tail -f /var/log/nginx/error.log
sudo tail -f /var/log/nginx/access.log
```

#### search in the logs by substring [in a mac terminal, is required an absolute path]
```bash
sudo zgrep -E "substring" /var/log/nginx/*.gz
```


