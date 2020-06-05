var details = {
    fullname: "Abdulganiyu Toyyib",
    ID : "HNG-01526",
    email: "abdulghoniyhtoyyib@gmail.com",
    language: "JavaScript"
}

function fullDetails() {
    return "Hello World, this is " + details.fullname + " with HNGi7 ID "
    + details.ID + " and email " + details.email + " using " + details.language 
    + " for stage 2 task"
}

console.log(fullDetails());