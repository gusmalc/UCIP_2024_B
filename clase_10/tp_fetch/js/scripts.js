let btn_carga = document.getElementById("btn_carga");
let cuerpo = document.getElementById("cuerpo");
let respuesta = document.getElementById("respuesta");
let ficha = document.getElementById("ficha");


btn_carga.addEventListener("click", ()=>{
    
    fetch('https://jsonplaceholder.typicode.com/users')
    .then(res => res.json() )
    .then(usr =>{
        
        crea_tabla(usr);
    })

})



function crea_tabla(us){
    let xx = "";
    us.forEach(el => {
        xx+= `
        <tr onclick='creaficha(${el.id})'>
            <td>${el.id}</td>
            <td>${el.name}</td>
            <td>${el.email}</td>      
        </tr>        
        `
    });
    cuerpo.innerHTML = xx;
    respuesta.style.display = "block";
}



function creaficha(id){
    fetch(`https://jsonplaceholder.typicode.com/users/${id}`)
    .then(res => res.json() )
    .then(datos =>{
        console.log(datos);
        //crea_tabla(usr);
    })
}


// el.style.cssText = "background-color: black; color: white;";
// el.style.border = "#000 solid 2px";
// el.classList.add("clase1", "clase2");
// el.classList.remove("clase");
// el.classList.toggle("clase");
// document.getElementById("estilo").href = "css/estilosjs.css";