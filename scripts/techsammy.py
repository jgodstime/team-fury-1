#this is my python script on my project for teamfury stage2
import json 
name = "Aigberua Samuel"
id = "HNG-01234"
# my python directory
def retjson():
	python2json = json.dumps("Hello world, this is "+name+" with HNGI7 ID: "+id+" using python for stage2 task")
	print (python2json)
retjson()
