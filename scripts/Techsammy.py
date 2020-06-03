#this is my python script on my project for teamfury stage2
import json 
name = "Aigberua Samuel"
hng_id = "HNG-01234"
gmail = "aigberuas7@gmail.com"
lang = "python"
# my python directory
def retjson():
	python2json = json.dumps("Hello world, this is "+name+" with HNGI7 ID: "+hng_id+" and this is my mail "+gmail+" using "+lang+" for stage2 task")
	print (python2json)
retjson()
