const Inioluwa = function() {
    const fullname = "Kola Adelakin Inioluwa G";
    const id = "HNG-02786";
    const language = "javascript";
    const email = "inikoladelakin@gmail.com"
    const text = `hello world, this is ${fullname} with HNGi7 ID ${id} and email ${email} using ${language} for stage 2 task`;

    const detailsForText = {
            full_name: fullname,
            HNG_ID: id,
            email: email,
            language: language,
    };
    return `${text}`;
};

console.log(Inioluwa());