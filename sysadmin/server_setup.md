
## on ubuntu server

#### assign static ip
```bash
sudo vim /etc/netplan/[file].yaml
```
```yaml
network:
    ethernets:
        eth0:
            dhcp4: true
            optional: true
    version: 2
    wifis:
        wlan0:
            access-points:
                newtworkname:
                    password: 1234
            dhcp4: false
            optional: true
            addresses: [192.168.1.111/24]
            gateway4: 192.168.1.1
            nameservers:
             addresses: [8.8.8.8,8.8.4.4]
```
```bash
sudo netplan --debug apply
```

#### update software
```bash
sudo apt update
sudo apt upgrade
```

#### add public key
```bash
copy the public key in the ./ssh/authorized_keys file
```

#### install nginx
```bash
sudo apt install nginx
sudo service nginx start
sudo vim /etc/nginx/sites-available/dafault
```

#### install node
```bash
curl -sL https://deb.nodesource.com/setup_14.x -o nodesource_setup.sh
sudo bash nodesource_setup.sh
sudo apt-get install -y nodejs
# used for node binary
sudo apt-get install build-essential
```

#### install redis
```bash
sudo add-apt-repository ppa:chris-lea/redis-server
sudo apt-get update
sudo apt-get install redis-server -y
sudo systemctl enable redis-server.service
# change config
sudo vim /etc/redis/redis.conf
# set:
supervised systemd
sudo systemctl restart redis
# dump
/var/lib/redis/dump.rdb
# show logs
tail -f /var/log/redis/redis-server.log
```
#### install redis-json [see](https://oss.redislabs.com/redisjson/)
```bash
cd /etc/redis
git clone https://github.com/RedisJSON/RedisJSON.git
cd RedisJSON
make
git submodule update --init --recursive
sudo make setup

#install rust
curl https://sh.rustup.rs -sSf | sh
sudo apt install cargo
cargo build --release

#assign the directory to the redis user
sudo chown -R redis /etc/redis/RedisJSON/
```

#### install unattended-upgrades
```bash
sudo apt install unattended-upgrades
```

#### ufw (uncomplicated firewall)
```bash
sudo ufw enable
sudo ufw allow ssh
sudo ufw status verbose

sudo ufw allow https
sudo ufw allow http
sudo ufw deny http
sudo ufw reject http
```

#### https (via certbot)
```bash
sudo snap install core; sudo snap refresh core
sudo snap install --classic certbot
sudo ln -s /snap/bin/certbot /usr/bin/certbot
sudo certbot --nginx
```
 