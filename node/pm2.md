### allow pm2 to restart services at server reboot

#### install pm2 globally
```bash
yarn global add pm2
```
#### Generating a startup script 
```bash
pm2 startup
```
#### start a service
```bash
pm2 start index.js
```
#### save the current services status
```bash
pm2 save
```
#### show the list of the processes add to the startup script
```bash
cat ~/.pm2/dump.pm2 | grep "namespace"
```

