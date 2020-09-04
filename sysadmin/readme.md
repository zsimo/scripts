
## on ubuntu server


#### add user
```bash
sudo adduser new_user
usermod -aG sudo new_user
```

#### change the ownership of a directory to the current user
```bash
sudo chown -R $USER /var/log/forever
```


#### nginx
```bash
sudo apt-get install nginx
sudo service nginx start
sudo vim /etc/nginx/sites-available/default
ll /var/www/html/
#assign the www dir to <current logged user> instead of root
sudo chown -R $USER:$USER /var/www
```

#### node
```bash
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt-get install -y nodejs
```


#### log
```bash
ll /var/log/
sudo tail -f /var/log/auth.log
```


#### github / bitbucket ssh keys
```bash
cd /home/ubuntu/.ssh
ssh-keygen
cat id_rsa.pub
# add key to github / bitbucket
git remote -v
git remote add origin git@bitbucket.org:zsimo/api.git
```

#### Install unattended upgrades
```bash
sudo apt install unattended-upgrades
# View conf file
cat /etc/apt/apt.conf.d/50unattended-upgrades
```

#### scan for open ports
```bash
sudo apt install nmap
nmap YOUR_SERVER_IP_ADDRESS
# services list associated to ports
less /etc/services
```

#### ufw (uncomplicated firewall)
```bash
sudo ufw enable
ufw allow ssh
sudo ufw status verbose

ufw allow http
ufw deny http
ufw reject http
```
```bash
systemctl start firewalld
systemctl stop firewalld
systemctl disable firewalld
```

#### see os version
```bash
cat /etc/issue
```

#### see dependencies
```bash
ldd /bin/bash
```

#### show processes
```bash
ps aux
```
 
 