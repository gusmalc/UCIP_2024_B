let form_contacto = document.getElementById('form_contacto');
let btn_enviar = document.getElementById('btn_enviar');
let suma = document.getElementById('suma');

btn_enviar.addEventListener('click', (e)=>{
    e.preventDefault();
    if(suma.value == "5"){
        alert("Si envio")
    }
})