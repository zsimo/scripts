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
```

#### config
```bash
sudo vim /etc/php-fpm.d/www.conf
```



#### config
```bash
sudo systemctl start php70-php-fpm.service
sudo systemctl status php70-php-fpm.service
```

