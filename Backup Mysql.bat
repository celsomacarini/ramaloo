clear
cd\
cd "C:\xampp\mysql\bin"

call robocopy C:\xampp\htdocs\ramal C:\xampp\BACKUP\ramal /MIR /R:3 /W:5
call mysqldump --host localhost -P 3306 --triggers=false --user=root --password=popmd*243 --all-databases > C:\xampp\BACKUP\ramal\todos_bd.sql
call mysqldump -h localhost -u root -ppopmd*243 ramal>C:\xampp\BACKUP\ramal\ramal.sql
set arquivo= C:\xampp\BACKUP\ramal\ramal_%date:~-4,4%%date:~-7,2%%date:~-10,2%.sql

call robocopy C:\xampp\htdocs\ramal \\192.131.2.160\backup\BKPMysql\ramal /MIR /R:3 /W:5
call mysqldump --host localhost -P 3306 --triggers=false --user=root --password=popmd*243 --all-databases > \\192.131.2.160\backup\BKPMysql\todos_bd.sql
call mysqldump -h localhost -u root -ppopmd*243 ramal>C:\xampp\BACKUP\ramal\ramal.sql > \\192.131.2.160\backup\BKPMysql\ramal.sql

timeout 20
