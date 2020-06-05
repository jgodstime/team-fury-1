const me = {
    my_name: 'Oguntade Abass',
    my_id: 'HNG-00851',
    my_email: 'Oguntadeabass1@gmail.com',
    my_language: 'Javascript',
}

function introduceMe({ my_name, my_email, my_id, my_language }) {
    return `Hello World, this is ${my_name} with HNGi7 ID ${my_id} and email ${my_email} using ${my_language} for stage 2 task`
}

introduceMe(me)