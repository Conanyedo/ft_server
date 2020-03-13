service mysql start
mysql < /var/www/html/phpmyadmin/sql/create_tables.sql
mysql -e "GRANT SELECT, INSERT, UPDATE, DELETE ON phpmyadmin.* TO 'edo'@'localhost' IDENTIFIED BY 'edo';"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'edoconan'@'localhost' IDENTIFIED BY 'edoconan' WITH GRANT OPTION;"

mysql -e "CREATE DATABASE wordpress;"
mysql -e "GRANT ALL ON wordpress.* TO 'edoconan'@'localhost' IDENTIFIED BY 'edoconan';"
