var Personal_Info = {
    fullname: "Johnkennedy Ogu",
    hng_id: "HNG-04902",
    Pro_language: "javascript",
    email: "ogujohnkennedy@gmail.com",
}

const info = () => {
    var output = `Hello world, this is ${Personal_info.fullname} with HNGi7 ID ${Personal_info.hng_id} and email ${Personal_Info.email} using ${Personal_Info.Pro_language} for stage 2 task`;
    return console.log(output);
}

info();