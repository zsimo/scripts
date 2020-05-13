
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
```redis
INCR cv/visitcounter
```

