var obj = {name: "Sharon Jebitok", email: "sharonkosgei4@gmail.com", id: "HNG-02307", language: "Javascript"};

var string = JSON.stringify(obj);

var output = `Hello World, this is ${obj.name} with HNG ID ${obj.id} and email ${obj.email} using ${obj.language} for stage 2 task `;

console.log(output);