
## on ubuntu server


#### install 
```bash
sudo apt install redis-server
sudo vim /etc/redis/redis.conf
# set supervised systemd
sudo systemctl restart redis.service
sudo systemctl status redis
```

#### install 
```bash
redis-cli
```


#### usage
```bash
INCR cv/visitcounter
```

#### directories
```bash
#logs
/var/log/redis_*
#config
/etc/redis/redis.conf
#executable
/usr/local/bin/
#data
/var/lib/redis/
#init scripts
/etc/init.d/redis_*
#PID file
/var/run/redis_*
```

