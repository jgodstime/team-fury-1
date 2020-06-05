;(function introduction() {
	const data = {
		email: 'francis.udejiofficial@gmail.com',
		fullName: 'Francis Tochukwu Udeji',
		language: 'JavaScript',
		id: 'HNG-04675',
		version: 'HGNi7',
		stage: 2,
	}

	const introductoryText = `Hello World, this is ${data.fullName} with ${data.version} ID ${data.id} and email ${data.email} using ${data.language} for stage ${data.stage} task`

	return console.log(introductoryText)
})()
