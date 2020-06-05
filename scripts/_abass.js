const myTask = () => {
    const Me = {
        my_name: 'Oguntade Abass',
        my_id: 'HNG-00851',
        my_email: 'Oguntadeabass1@gmail.com',
        my_language: 'Javascript',
    };
    return `Hello World, this is ${Me.my_name} with HNGi7 ID ${Me.my_id} and email ${Me.my_email} using ${Me.my_language} for stage 2 task`;
}

console.log(myTask());