<fieldset>
	<legend>Exercises 2</legend>

<ol>
	<li>
		<ol>
			<li>telnet server-ip port number</li>
			<li>ssh server ip</li>
			<li>df -h</li>
			<li>df -i</li>
			<li>ls -lrth</li>
			<li>Copy files to the remote server using FTP, SFTP and SCP
				<ol>
					<li>scp -pr source detination </li>
					<li>ftp ip address of remote server<br>ftp> mput source destination</li>
					<li>sftp remote server<br>put localfile</li>
				</ol>
			
		</ol>
	</li>
	<li><br>
	 	telnet server ip<br> 
		mkdir test<br>
		cd  test<br>
		touch a b c d e f <br>
		cd .. <br>
		tar -cvf test.tar test <br>
		get test.tar /myfolder/ <br>
		tar -xvf /myfolder/test.tar
	</li>
	<li>
		Firstly create the bash script file after set conditions for auto start apache server greate than maximum load limit after that set cron <br><br>
#!/bin/sh<br>
# script to check server for extremely high load and restart Apache if the condition is matched<br>
check=`cat /proc/loadavg | sed 's/./ /' | awk '{print $1}'`<br>
max_load='25'<br>
high_load_log='/var/log/apache_high_load_restart.log';<br>
index_php_loc='/home/site/www/index.php';<br>
apache_init='/etc/init.d/apache2';<br>
#<br>
site_maintenance_msg="Site Maintenance in progress - We will be back online in a minute";<br>
if [ $check -gt "$max_load" ]; then><br>
#25 is load average on 5 minutes<br>
cp -rpf $index_php_loc $index_php_loc.bak_ap<br>
echo "$site_maintenance_msg" > $index_php_loc<br>
sleep 15;<br>
if [ $check -gt "$max_load" ]; then<br>
$apache_init stop<br>
sleep 5;<br>
$apache_init restart<br>
echo "$(date) : Apache Restart due to excessive load | $check |" >> $high_load_log;<br>
cp -rpf $index_php_loc.bak_ap $index_php_loc<br>
fi<br>
fi<br>
<br><br>Cron Job<br>

		*/2 * * * * /bin/sh /root/apache-load-checker.sh > /dev/null 2>&1
	</li>
	<li>
		<ol>
			<li>top</li>
			<li>ps -eo pid,ppid,cmd,%mem,%cpu --sort=-%mem | head</li>
			<li>renice -p <PID> <PRIORITY> or ionice -c <CLASS> -p <PID></li>
		</ol>
	</li>
	<li>
		create view routers_hostnames as select hostname from routers; 
	</li>
	<li>
		INSERT INTO `routers` (`sapid`, `hostname`, `loopback`, `mac_address`, `created`, `modified`) 
		VALUES 
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00'),
		('13432', 'www.gmail.com', '312', '123.321.43.19', '2020-09-26 04:00:00', '2020-09-26 04:00:00');
	</li>

</ol>


</fieldset>