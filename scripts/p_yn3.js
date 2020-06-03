var displayText = {
  name:"Peter Amugen",
  id:"HNGi-01447",
  language:"javascript",
  email:"amugenp@gmail.com"
};

document.write("Hello world, this is " + displayText.name + " with HNGi id " + displayText.id + " using " + displayText.language + " for stage 2 task.");

var myJSON = JSON.stringify(displayText);
console.log(myJSON);