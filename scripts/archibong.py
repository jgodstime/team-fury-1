


class Task:
	def __init__(self, name, id, language):
		self.name = name
		self.language = language
		self.id = id
	
	def text(self):
		 print (f'Hello World, this is {self.name}, with HNGi7 ID ({self.id}) using {self.language} for Stage 2 task')

email = 'archibongc4@gmail.com'

t = Task("Charles Effiom", 'HNGi7-01950', "Python")
t.text()



