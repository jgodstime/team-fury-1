import json


class Task:
	def __init__(self, name, id, email, language):
		self.name = name
		self.language = language
		self.id = id
		self.email = email
	
	def text(self):
		 return print(f'Hello World, this is {self.name}, with HNGi7 ID {self.id} and email {self.email} using {self.language} for Stage 2 task')

email = 'archibongc4@gmail.com'

t = Task("Charles Effiom", 'HNGi7-01950', 'archibongc4@gmail.com', "Python")
t.text()

