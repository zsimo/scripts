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
#### proxy to node server on localhost with Keepalive=On
```bash
ProxyPass /node http://localhost:5050 Keepalive=On
```

#### show latest apache logs
```bash
tail -f /etc/httpd/logs/<site>error_log
```

#### show apache open connections to proxy pass
```bash
netstat -nt | grep :5050 | wc -l
```