#### edit configs
```bash
sudo vim /etc/sphinx/sphinx.conf
```

#### start / stop
```bash
sudo service searchd start
sudo service searchd stop

#or

systemctl stop searchd
systemctl start searchd

#start
sudo searchd --config /etc/manticoresearch/manticore.conf 
sudo searchd --config /etc/manticoresearch/manticore.conf  --status
```

re-index
```bash
sudo -u manticore indexer --rotate institutions_banks_v2
sudo -u manticore indexer --rotate --all
```


