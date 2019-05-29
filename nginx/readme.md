#### edit configs
```bash
sudo vim /etc/nginx/conf.d/site.com.conf
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
