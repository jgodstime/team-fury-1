class Name{

	constructor(name,id, email,language,){
                this.name=name;
                this.id=id;
                this.email=email
                this.language=language;
  }
	introduce(){
		    console.log(`Hello World, this is ${this.name},with HNGi7 ID ${this.id} and ${this.email} using ${this.language} for stage 2 task`);
	}
}
const name1= new Name('Ekpenyong David Michael','HNG-01875','ekpenyongdavidmichael@gmail.com','Javascript');
name1.introduce();
