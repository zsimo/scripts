
## on ubuntu server


#### add user
```sh
sudo adduser new_user
usermod -aG sudo new_user
```


#### nginx
```sh
sudo apt-get install nginx
sudo service nginx start
sudo vim /etc/nginx/sites-available/default
ll /var/www/html/
#assign the www dir to <current logged user> instead of root
sudo chown -R $USER:$USER /var/www
```

#### node
```sh
curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
sudo apt-get install -y nodejs
```
