clear
cd\
cd "C:\xampp\mysql\bin"

set arquivo= C:\xampp\BACKUP\ramal\ramal_%date:~-4,4%%date:~-7,2%%date:~-10,2%.sql
mysqldump --host localhost -P 3306 --user=root --password=popmd*243 --all-databases > %arquivo%

set arquivo= \\192.131.2.160\backup\BKPMysql\ramal\ramal_%date:~-4,4%%date:~-7,2%%date:~-10,2%.sql
mysqldump --host localhost -P 3306 --user=root --password=popmd*243 --all-databases > %arquivo%

pause
timeout 20