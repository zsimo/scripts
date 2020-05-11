
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
sudo less /etc/nginx/sites-available/default
sudo vim /etc/nginx/sites-available/default
```

