const muse = {
    hngId:'HNG-02155',
    name: 'Oluwasegun Akinnage',
    language: 'JavaScript',
    email: 'theakinnagbe@gmail.com'
}

const me =(person)=>{
    let output = `Hello World, this is ${person.name} with HNGi7 ID ${person.hngId} and email ${person.email} using ${person.language} for stage 2 task`
    console.log(output)
}
me(muse)