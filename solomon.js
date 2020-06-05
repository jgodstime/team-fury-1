const profile = {
    fullName: 'Chimezie Solomon Iwuoha',
    id: 'HNG-04474',
    email:  'chimezie.solomon.cs@gmail.com',
    stack: 'javascript'
}
function myProfile({ fullName, id, email, stack }) {
    console.log(`Hello world, this is ${fullName} 
    with HNGi7 ID ${id} and email ${email} 
    using ${stack} for stage 2 task`);
}
myProfile(profile);
