// user data

const userData = {
    internName: "Nyior Clement",
    internId: "HNG-05586",
    programmingLanguage: "Javascript",
    iternEmail: "cnyior27@gmail.com",
}


//function that returns the required text output

function printUserData(name, id, language) {

	return `Hello World, this is ${name} with HNGi7 ID  ${id} using ${language} for stage 2`
	
}

console.log(printUserData(userData.internName, userData.internId, userData.programmingLanguage, ))


