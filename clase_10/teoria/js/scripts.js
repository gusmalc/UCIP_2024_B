


fetch('https://jsonplaceholder.typicode.com/users')
.then(res => res.json() )
.then(usr =>{
    console.log(usr);
})
//.catch(err=>{ console.log(err.message) });