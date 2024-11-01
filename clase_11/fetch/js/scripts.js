let num1 = document.getElementById('num1');
let num2 = document.getElementById('num2');
let enviar = document.getElementById('enviar');
let resultado = document.getElementById('resultado');


enviar.addEventListener('click', (e)=>{
    e.preventDefault();
    let n1 = num1.value ;
    let n2 = num2.value ;

  let api_url = "https://api.malcotti.com/suma/";


    let data = new FormData();


    data.append("num1", n1);
    data.append("num2", n2);
    fetch(api_url, { method: "post", body: data })
    .then(res => res.text())
    .then(el => {
        resultado.innerHTML = el;
    })
    .catch(err => { console.log(err.message) });

})

