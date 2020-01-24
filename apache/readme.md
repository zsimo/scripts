#### edit configs
```bash
sudo vim vi /etc/httpd/vhost.d/<site>.com.conf
```

#### start / stop
```bash
service httpd start
service httpd stop
service httpd restart
# or
sudo systemctl restart nginx
```

#### test configs
```bash
sudo apachectl -t
```