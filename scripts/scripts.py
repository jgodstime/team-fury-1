import json
name= "Banjo Oluwatimilehin"
id= "HNG-05539"
# a python dictionary
def retjson():
    python2json = json.dumps("Hello World, this is "+name+" with HNGI7 ID: "+id+" using Python for stage 2 task")
    print (python2json)
retjson()
