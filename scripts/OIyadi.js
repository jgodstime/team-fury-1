// Collect data in object pairs
let data =   {
    fullname: "Oluwaseun Iyadi",
    output: "Hello World, this is Oluwaseun Iyadi with HNGi7 ID HNG-05348 and email oluwaseuniyadi@yahoo.com using Javascript for stage 2 task",
    id: "HNG-05348",
    status: "pass",
    language: "Javascript",
    email: "oluwaseuniyadi@yahoo.com",
    file: "scripts/OIyadi.js"
  };
  
  // Use data object in string literal
  let getData = () => {
    return `Hello World, this is ${data.fullname} with HNGi7 ID ${data.id} and email ${data.email} using ${data.language} for stage 2 task`;
  };
  
  // Output getData to terminal
  console.log(getData());