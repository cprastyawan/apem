#!/usr/bin/python
import serial
import sys
import MySQLdb
from time import sleep
from datetime import datetime


dbConn = MySQLdb.connect("localhost","root","nurcahyo","WORKSHOP")
cursor = dbConn.cursor()
device = '/dev/ttyACM0'

while True:
	try:
		print "Mencoba menghubungi.... ",device
		arduino = serial.Serial(device,9600,timeout=.9)
	except:
		print "Gagal menghubungi ",device
	try:
		data = arduino.readline()
		pieces = data.split("\t")
		print data
		try:
			tanggalwaktu=datetime.now()
			tanggal=tanggalwaktu.strftime('%Y-%m-%d')
			waktu=tanggalwaktu.strftime('%H:%M:%S')
			cursor.execute("INSERT INTO bmp280Data(temp,pres,alt,tanggal,waktu) VALUES(%s,%s,%s,%s,%s)",(pieces[0],pieces[1],pieces[2],tanggal,waktu))
			dbConn.commit()
			print "sukses"
		except MySQLdb.IntegrityError:
			print "Gagal memasukkan data"
	except:
		print "gagal mendapat data dari arduino"

cursor.close()
