let carga = document.getElementById('carga');
let carga2 = document.getElementById('carga2');
let receta = document.getElementById('receta');


carga.addEventListener('click', ()=>{
    fetch('recetas/pizza.html')
    .then(res => res.text() )
    .then(rr =>{
        receta.innerHTML = rr;
    })
})

carga2.addEventListener('click', ()=>{
    fetch('recetas/empanadas.html')
    .then(res => res.text() )
    .then(rr =>{
        receta.innerHTML = rr;
    })
})


// fetch('https://jsonplaceholder.typicode.com/users')
// .then(res => res.json() )
// .then(usr =>{
//     console.log(usr);
// })
//.catch(err=>{ console.log(err.message) });


// function suma(a,b){
//     //console.log(a+b);
//     return a+b;
// }

let suma = (a,b)=> a+b;
    


//suma(8,5)
let x = suma(8,5)
