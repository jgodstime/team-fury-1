let myName = {
    name : 'Ezekiel Benjamin',
    id : 'HNG-06344',
    pLanguage : 'Javascript',
    Email: 'zikel1996@gmail.com'
}

let person = ( identifer ) => {
    let output =   `Hello World, this is ${identifer.name} with HNGi7 ID ${identifer.id}  and email ${identifer.Email} using ${identifer.pLanguage} for stage 2 task`
    console.log(output)
}
person(myName)