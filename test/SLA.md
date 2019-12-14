# The backup critera for the working services

## Wordpress

 - Backup wordpress database >> mysql dump
 - backup files in wp-content folder
 - wordpress configuration (wp-config.php file and .htaccess file)

## Grafana

 - /var/lib/grafana/grafana.db backup file for grafana databse
 - Use grafana backup tool to backup dashboards

## Influxdb

 - Backup telegraf databse in influxdb
 - Telegraf backup contains syslog logs
 


 