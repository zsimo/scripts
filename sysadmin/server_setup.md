
## on ubuntu server


#### update software
```bash
sudo apt update
```
#### upgrade software
```bash
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
```

#### install redis
```bash
sudo add-apt-repository ppa:chris-lea/redis-server
sudo apt-get update
sudo apt-get install redis-server -y
# change config
sudo vim /etc/redis/redis.conf
# set:
supervised systemd
sudo systemctl restart redis
# dump
/var/lib/redis/dump.rdb
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
 