let ico_menu = document.getElementById('ico_menu');
let menu = document.getElementById('menu');
let caja1 = document.getElementById('caja1');
let ico_hamb = document.querySelector('ico-hamb');

ico_menu.addEventListener('click', ()=>{
    menu.classList.toggle("abrir_menu");
})

window.addEventListener('scroll', ()=>{
   
    let x = document.documentElement.scrollTop;
    caja1.innerHTML = x;

    if(x>0){
        menu.classList.remove("abrir_menu");
        ico_hamb.cierra();
    }
})


// el.style.cssText = "background-color: black; color: white;";
// el.style.border = "#000 solid 2px";
// el.classList.add("clase1", "clase2");
// el.classList.remove("clase");
// el.classList.toggle("clase");
// document.getElementById("estilo").href = "css/estilosjs.css";