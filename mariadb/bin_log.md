```sql
[mysqld]

# --- Attivazione base ---
server_id        = 1          # obbligatorio, unico nel cluster
log_bin          = /var/log/mariadb/mariadb-bin [o il path che preferisci]
binlog_format    = ROW        # obbligatorio per Change Data Capture (CDC)
binlog_row_image = MINIMAL       # Solo le colonne che identificano la riga (PK) + quelle effettivamente cambiate

# --- Filtro schema ---
binlog_do_db     = actide_commons   # solo questo schema viene loggato

# --- Retention 1 giorno ---
expire_logs_days = 1          # MariaDB ≤ 10.5
# binlog_expire_logs_seconds = 86400  # alternativa da MariaDB 10.6+
```
