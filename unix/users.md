


#### create new user
```bash
sudo groupadd groupname
```


#### add user
```bash
sudo adduser new_user
```


#### add user to a group
```bash
sudo usermod -aG groupname username
```
#### remove user from group
```bash
sudo gpasswd --delete username groupname
```
#### list users belonging to a group
```bash
sudo getent group groupname
```


#### change the ownership of a given directory
```bash
sudo chown -R app:app /path/to/folder
```
