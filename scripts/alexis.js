const myInfo = {
    fullname:"Alexis Majyambere",
    id:"HNG-00521",
    language:"JavaScript",
    email:"alexismajyambere2@gmail.com"
}
const displayMyscript = (info) => {
    return `Hello World, this is ${info.fullname} with HNGi7 ID ${info.id} and email ${info.email} using ${info.language} for stage 2 task`;
}
console.log(displayMyscript(myInfo));
