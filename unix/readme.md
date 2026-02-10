#### .tar
```bash
# create
tar -cvf output.tar /dirname
# Extract
tar -xvf output.tar [/dirname]
```

#### pretty print json
```bash
echo '{"foo": "lorem", "bar": "ipsum"}' | python -m json.tool
```
#### copy a folder and all its content
 ```bash
 cp -r Code/website/ ./website
 ```   
      
#### create a symbolic link
```bash
ln -s {/path/to/file-name} {link-name}
```   
```bash
ln -s /shared/sales/data/file.txt sales.data.txt
```  

#### show process list filter by a given word
```bash
ps -aux | grep node
#-9 to force
kill 123456 -9
```

#### get process list showing in a tree
```bash
htop
# F4 to filter
# key up / down to select the root process
# F9 to kill
```

#### search file by name
```bash
find . -iname saml.php
```

#### show net info
```bash
netstat -lntup
```

#### clear all queued emails
```bash
postsuper -d ALL
```

#### clear queued emails addressed to me@email.com
```bash
mailq | tail -n +2 | awk 'BEGIN { RS = "" } / me@email\.com$/ { print $1 }' | tr -d '*!' | postsuper -d -
```
#### show 
```bash
sudo mailq
```



#### make dir if not exists add all necessary path
```bash
mkdir -p /home/me/code/app
```

#### check if a service is installed
```bash
which git
```

#### search for a string in the all the files in the current directory and all the subdirectories
```bash
grep -nr 'ciao' .
```

#### get system info
```bash
uname -a
```

#### force the ssh connection 
```bash
while true; do echo -n .; sleep 30; done
```







