
## on ubuntu server


#### install (ubuntu)
```bash
sudo apt install redis-server
```
#### install (centos)
```bash
sudo yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
sudo yum --enablerepo=remi install redis
```

#### manage
```bash
sudo vim /etc/redis/redis.conf
# set supervised systemd
sudo systemctl restart redis.service
sudo systemctl status redis
```


#### usage
```bash
INCR cv/visitcounter
```

#### delete al keys starting with a pattern
``` redis
EVAL "return redis.call('del', unpack(redis.call('keys', 'doc:index*')))" 0
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
#systemd config
/etc/systemd/system/redis.service
```

