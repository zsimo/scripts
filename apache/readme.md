#### edit configs
```bash
sudo vim vi /etc/httpd/vhost.d/<site>.com.conf
```

#### start / stop
```bash
service httpd start
service httpd stop
service httpd restart
```

#### test configs
```bash
sudo apachectl -t
```


#### proxy to node server on localhost 
```bash
ProxyPass /node http://localhost:5050
```