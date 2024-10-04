//let box1 = document.getElementById('box1');
let box1 = document.querySelector("#box1");
let box2 = document.querySelector("#box2");
let btn1 = document.querySelector("#btn1");
let btn2 = document.querySelector("#btn2");
let estilos = document.querySelector("#estilos");

// box1.onclick = ()=>{
//     alert('rojo')
// }

// window.addEventListener("load",()=>{
//     alert('ok');
// })

// window.onload = ()=>{
//     alert("se termino la carga")
// }

// el.style.cssText = "background-color: black; color: white;";
// el.style.border = "#000 solid 2px";
// el.classList.add("clase1", "clase2");
// el.classList.remove("clase");
// el.classList.toggle("clase");
// document.getElementById("estilo").href = "css/estilosjs.css";


box1.addEventListener("click",(e)=>{
    let x = e.target;
    //alert(x.dataset.nombre);
})

// btn1.addEventListener("click",(e)=>{
//     box1.classList.remove("bordes", "fondo_negro");
// })

box2.addEventListener("click",(e)=>{
    // e.preventDefault();
    //e.stopPropagation();
    // let x = e.target;
    // alert(x.id);
    //box1.style.background = "#0f0";
    //box1.style.cssText = "background: #00f; width: 500px;";
    ///box1.classList.add("bordes", "fondo_negro");
    box1.classList.toggle("fondo_negro");
    box1.classList.toggle("bordes");
})


btn2.addEventListener("click",(e)=>{
    estilos.href = "css/modo_oscuro.css"
})