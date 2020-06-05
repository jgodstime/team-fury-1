const myData = {
    fullname: "Ekaji Onah",
    ID: "HNG-05496",
    language: "javascript",
    email: "ekajionah@gmail.com"
}

const printBio = () => {
  return  `Hello World, this is ${myData.fullname} with HNGi7 ID ${myData.ID} using ${myData.language} for stage 2 task`;
}

printBio();