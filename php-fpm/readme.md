### php-fpm (FastCGI Process Manager)

#### show process list filter by a given word
```bash
ps -aux | grep node
#-9 to force
kill 123456 -9
```


#### show nginx logs
```bash
sudo tail -f /var/log/nginx/error.log
sudo tail -f /var/log/nginx/access.log
```

#### config
```bash
sudo vim /etc/php-fpm.d/www.conf
```

#### manage service
```bash
sudo systemctl start php70-php-fpm.service
sudo systemctl status php70-php-fpm.service
```
#### check if php is running
```bash
ps aux | grep php
```


