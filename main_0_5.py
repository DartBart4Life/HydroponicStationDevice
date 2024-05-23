import requests
import time
import datetime

patchtemp='/home/rasp/temp.txt'
patchstat='/home/rasp/stat.txt'

def read_file(patchtemp):
	with open(patchtemp,'r') as file:
		value=file.read().strip()
	return value

def stat_file(patchstat):
	with open(patchstat,'r') as file:
		stat=file.read().strip()
	return stat
	
def save_temp_to_file(stat,patchstat):
	with open(patchstat, 'w') as file:
		file.write(str(stat))
		file.close()