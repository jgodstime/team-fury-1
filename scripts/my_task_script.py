# A function that returns "Hello World, this is my_name with HNGi7 ID using python for stage 2 task"
def myfunction():
    my_data = {
    "hello" :"Hello World",
    "full_name" : "Bitrus Kim Dung Choji",
    "my_id" : "HNG-02486",
    "email" : "bitruschoji$real@gmail.com",
    "language" : "Python"
    }
    return print("{hello}, this is {full_name} with HNGi7 ID {my_id} and email {email} using {language} for stage 2 task".format(**my_data))
myfunction()
