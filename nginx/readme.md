#### edit configs
```bash
sudo vim /etc/nginx/conf.d/site.com.conf
sudo vim /etc/nginx/sites-available/default
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
```bash
location / {
  proxy_pass http://127.0.0.1:3001/;
}
```