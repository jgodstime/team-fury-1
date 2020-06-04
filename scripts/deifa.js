//object holds the properties needed by printMessage
const internDetails = {
	fullname: "Imiebo Godson",
	id: "HNG-04448",
	email: "imiebo.godson@gmail.com",
	language: "JavaScript"
};


//printMessage function displays the message
const printtMessage = (fullname, id, language) => {
	const message = `Hello World, this is ${fullname} with HNGi7 ID ${id} using ${language} for stage 2 task`;

	return message;

};

//calling the printMessage funtion
printtMessage(internDetails.fullname, internDetails.id, internDetails.language);