const name = "Kola-Adelakin Inioluwa G";
const hng_id = "HNG-02786";
const language = "javascript";
const text = `hello world, this is ${name} with the HNGi7 ID ${hng_id} using ${language} for stage 2 task`;
console.log(text);

const task2 = {
    name: name,
    hng_id: hng_id,
    language: language,
};

const dataInJSON = JSON.stringify(task2);
console.log(task2);