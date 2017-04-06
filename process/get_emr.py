#!usr/bin/env python
import sys
import socket
import MySQLdb
import re
#import subprocess
#print "hello,here is py file"

hostip = "localhost"
port = 8090

sock = socket.socket()
sock.connect((hostip,port))

#while True:
#	uid = "1"
uid = sys.argv[1]
id = sys.argv[2]
while True:
	sock.send(uid)
	result = sock.recv(1024)
	if not result:
		break
	print result

	result = re.sub("RECORDID:",'',result)
	result = re.sub("doctor:",'',result)
	result = re.sub("syonptom:",'',result)
	result = re.sub("mediexam:",'',result)
	result = re.sub("diagnose:",'',result)
	result = re.sub("drug:",'',result)
	result = re.sub("date:",'',result)
	emr = result.split("\n")
	RECORDID = emr[0]
	doctor = emr[1]
	syonptom = emr[2]
	mediexam = emr[3]
	diagnose = emr[4]
	drug = emr[5]
	date = emr[6] 

	conn = MySQLdb.connect('localhost','root','xx123456','family')
	cur = conn.cursor()

	tbl_name = "emr"
	try:
		cur.execute("INSERT INTO emr(RECORDID,id,doctor,syonptom,mediexam,diagnose,drug,date) values (%s,%s,%s,%s,%s,%s,%s,%s)",(RECORDID,id,doctor,syonptom,mediexam,diagnose,drug,date))
		conn.commit()
	except:
		conn.rollback()

conn.close()
sock.close()
