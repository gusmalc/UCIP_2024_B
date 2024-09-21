let btn1 = document.getElementById('btn1');
let num1 = document.getElementById('num1');
let num2 = document.getElementById('num2');
let resultado = document.getElementById('resultado');


btn1.addEventListener("click", function(){
    let a = parseInt(num1.value);
    let b = parseInt(num2.value);
    let c = a + b;
    resultado.innerHTML = "<h1>" + c + "</h1>";
});




