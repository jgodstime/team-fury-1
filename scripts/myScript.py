import json

# Created Dictionary containing my details
details = [{
    "file": "myScript.py",
    "output": "Hello World, this is Ajibade Samuel with HNGi7 ID HNG-05014 using Python for stage 2 task",
    "name": "Ajibade Samuel",
    "id": "HNG-05014",
    "email": "samuelajibade22@gmail.com",
    "language": "Python",
    "status": "Pass"
}]

# Converted Dictionary to Json
detailsToJson = json.dumps(details, indent=4)

# To Print Json
print(detailsToJson)
