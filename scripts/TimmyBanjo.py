import json
name= "Banjo Oluwatimilehin"
id= "HNG-05539"
email="timmybanjo@gmail.com"
# a python dictionary
def returnjson():
    python2json = json.dumps("Hello World, this is "+name+" with HNGI7 ID: "+id+" and email "+email+" using Python for stage 2 task")
    print (python2json)
returnjson()
