const myHngDetails  =() => {
    const output ={
        fullName: "Godspower Uche",
        HNG_ID:   "HNG-02934",
        email:    "Godspowercuche56@gmail.com",
        language: "JavaSript" 
    }
    return `Hello World, this is ${output.fullName} with HNGi7 ID ${output.HNG_ID} and email ${output.email} using ${output.language} for stage 2 task`;
};
console.log(myHngDetails());
