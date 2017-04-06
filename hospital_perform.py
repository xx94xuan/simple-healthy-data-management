#!usr/bin/env python

import socket
import MySQLdb

clientip = '0.0.0.0'
port = 8090

sock = socket.socket()
sock.bind((clientip,port))

sock.listen(5)

print("Listening...")

conn = MySQLdb.connect('localhost','root','xx123456','hospital')
cur = conn.cursor(MySQLdb.cursors.DictCursor)

while True:
	cli,addr = sock.accept()
	print("Get connection from ",addr)
	while True:
#		uid = 1
		uid = cli.recv(1024)
		print uid
		if not uid:
			break
#		uid = int(uid)
		cur.execute("SELECT * FROM hospemr WHERE RECORDID=7")
		results = cur.fetchall()
		for row in results:
			cli.send("RECORDID:%s\n"%row['RECORDID'])
			cli.send("doctor:%s\n"%row['doctor'])
			cli.send("syonptom:%s\n"%row['syonptom'])
			cli.send("mediexam:%s\n"%row['mediexam'])
			cli.send("diagnose:%s\n"%row['diagnose'])
			cli.send("drug:%s\n"%row["drug"])
			cli.send("date:%s"%row['date'])
			print "sent!"
		conn.close()
cli.close()
