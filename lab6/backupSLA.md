# Backup critera for the working services

## Coverage

 - SQL: Dumps
 - Wordpress: Configuration:
 - Bind9: named.* db.*

## Frequency
    
 - Wordpress, SQL, DNS Backups will run incremental backups everyday and full ones every month, while also deleting incremental backups once in the month to free up spcace


## Usability
  We will use duplicity and cron tabs as our backup system with the help of protocols rsync,file and cp we will be able to complete every task.
 
## Storage

 - backup server
 - backup agent
 