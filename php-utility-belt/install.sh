#!/bin/bash
#---service---
#On vsftpd service 
#mv /etc/init/vsftpd.conf.off /etc/init/vsftpd.conf 
#service vsftpd start
#-------------
#On postfix service
#mv /etc/init/dovecot.conf.off /etc/init/dovecot.conf
#service dovecot start
#-------------
#On smbd(samba) service
#mv /etc/init/smbd.conf.off /etc/init/smbd.conf
#service smbd start
#-------------
#On rpcbind service
#mv /etc/init/rpcbind-boot.conf.off /etc/init/rpcbind-boot.conf
#mv /etc/init/rpcbind.conf.off /etc/init/rpcbind.conf
#Other service
#name have in script --> apache2, bind9, dns-clean, mysql, postfix, postgresql, pppd-dns, rc.local, snmpd, tomcat7, ondemand, 
runservice="apache2"
#run_service
	sysv-rc-conf --level 2 $runservice on
	sysv-rc-conf --level 3 $runservice on
	sysv-rc-conf --level 4 $runservice on
	sysv-rc-conf --level 5 $runservice on
rm -Rf /var/www/html/*
cp -R Application/ /var/www/html
chmod -R 777 /var/www/html/Application
echo "flag is :$1" > /home/flag.txt
chmod +r /home/flag.txt
service apache2 restart
if test $7 = 0 && $8 != 3
then
password=$(echo $3$4 | md5sum)
mysqladmin -u root -p'5plus4=10' password $password
pass=$(date | base64 | md5sum | md5sum | base64)
echo 'tester:'$pass | chpasswd
fi
history -c
rm -Rf *