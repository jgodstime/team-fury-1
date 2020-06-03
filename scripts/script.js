fetch('scripts/person.json')
    .then(function (response) {
        // The API call was successful!
        return response.json();
    })
    .then(function (data) {
        // This is the JSON from our response
        appendData(data);
    })
    .catch(function (err) {
        // If there was an error report error to console
        console.log('error: ' + err);
    });
    // Assign JSON from response to a function
function appendData(data){
    // Iterate over the object (response from JSON)
        for (var i = 0; i < data.length; i++) {
            console.log(`Hello World, this is ${data[i].name} with HNGi7 ID ${data[i].id} using ${data[i].language} for stage 2 task`);
        }
}