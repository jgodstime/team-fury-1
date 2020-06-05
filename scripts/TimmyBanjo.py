import json
fullname= "Banjo Oluwatimilehin"
ID= "HNG-05539"
email="timmybanjo@gmail.com"
language="python"
# a python dictionary
def returnjson():
    python2json = json.dumps("Hello World, this is "+fullname+" with HNGI7 ID: "+ID+" and email "+email+" using "+language+" for stage 2 task")
    print (python2json)
returnjson()
