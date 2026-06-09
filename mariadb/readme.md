#### see connected clients
```sql
SHOW STATUS LIKE 'Threads_connected';
```

#### see service status
```ssh
sudo systemctl status mariadb
```

#### configuration file
```ssh
/etc/my.cnf.d/server.cnf 
```

#### show bin log related variables
```ssh
SHOW VARIABLES LIKE 'log_bin';
SHOW VARIABLES LIKE 'binlog_format';
SHOW VARIABLES LIKE 'binlog_row_image';
SHOW VARIABLES LIKE 'expire_logs_days';
SHOW VARIABLES LIKE 'server_id';
```


