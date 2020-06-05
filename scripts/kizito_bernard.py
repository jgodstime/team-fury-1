#intern_details = [ "Kizito Bernard", "02348", "Python" ];
#intern_intro = "Hello World, this is " + intern_details[0] + " with HNGi7ID " + intern_details[1] + " using " + intern_details[2] + " for stage 2 task";
intern_details_2 = { 'fullname': 'Kizito Bernard', 'id': '02348', 'email': 'kizitobernard@gmail.com', 'language': 'Python' };

def intern_intro_2():
    intern_details_2 = { 'fullname': 'Kizito Bernard', 'id': '02348', 'email': 'kizitobernard@gmail.com', 'language': 'Python' };
    intern_intro_2 = "Hello World, this is " + intern_details_2['fullname'] + " with HNGi7ID " + intern_details_2['id'] + " and " + intern_details_2['email'] + " using " + intern_details_2['language'] + " for stage 2 task";
    
    print ( intern_intro_2 )
    return
  
fullname = print (intern_details_2['fullname'])
id = print (intern_details_2['id'])
language = print (intern_details_2['language'])
intern_intro_2()
