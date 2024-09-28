//let txt1 = document.getElementById('txt1');
let txt1 = document.querySelector("#txt1");
let resultado = document.getElementById('resultado');

txt1.addEventListener("input",()=>{
    let x = extraerNumeros(txt1.value);
    txt1.value = x;
    resultado.innerHTML = x;
})

function extraerNumeros(texto) {
    // Utilizamos una expresión regular para encontrar números en el texto
    const numeros = texto.match(/[1-5]/g);
    // Si hay números, los unimos en un solo string, separados por espacios
    return numeros ? numeros.join(' ') : '';
}

let x = document.querySelectorAll(".clasex");

// let r  = x[0].innerHTML;
// console.log(r)
//alert(x[0])

let dias = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo'];
let res= ""
dias.forEach((el, i) => {
    //let a = i + " - " + el;z
    let a = `
    <h1 class='color_rojo'>${i}</h1>
     <h2>${el}</h2>
     <hr>
    `;
    res += a;

    console.log(a);
});

resultado.innerHTML = res;