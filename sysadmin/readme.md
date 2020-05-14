
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
tail -f /var/log/auth.log
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