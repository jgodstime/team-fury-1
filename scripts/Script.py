
import json

Language="Python"
Name="Ibrahim Folarin"
ID="HNG-03966" 

data = "Hello World,this is {} with HNGi7 ID {} and using {} language for stage2 task".format(Name,ID,Language) 

output = json.dumps(data)
print(output) 
