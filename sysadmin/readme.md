
## on ubuntu server


#### add user
```bash
sudo adduser new_user
usermod -aG sudo new_user
```


#### use the root user
```bash
sudo bash
#or
su root
```
#### manage sudo users 
Sudoers allows particular users to run various commands as the root user, without needing the root password.
```bash
sudo bash
cd
visudo
```

#### add user to a group
```bash
usermod -aG groupname username
```
#### remove user from group
```bash
gpasswd --delete username groupname
```

#### change the ownership of a directory to the root user
```bash
ls -alh
sudo chown -R root /var/log/forever
```

#### change the ownership of a directory to the current user
```bash
ls -alh
sudo chown -R $USER /var/log/forever
```

#### change the group of a directory to the current user
```bash
#show the groups the username belongs to
whoami
groups username
sudo chgrp username file.txt
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
```bash
# remove port
sudo ufw status numbered
sudo ufw delete <number>
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

#### show directories list by size
```bash
du --max-depth=1 -hx
```
 
