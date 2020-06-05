


const myDetails ={
    myName : "George Karumbi",
    intershipID : "HNG-01209",
    myLang : "Javascript",
    email : "gkarumbi@gmail.com"
};


 

georgeKarumbiDetails =()=>{
    let helloWorld  =`Hello World, this is ${myDetails.myName} with HNGi7 ID ${myDetails.intershipID} and email ${myDetails.email} using ${myDetails.myLang} for stage 2 task` ;
  
    return helloWorld;
}


console.log(georgeKarumbiDetails());