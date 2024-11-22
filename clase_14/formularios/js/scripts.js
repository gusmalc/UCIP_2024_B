let form_contacto = document.getElementById('form_contacto');
let btn_enviar = document.getElementById('btn_enviar');
let suma = document.getElementById('suma');
let aviso = document.getElementById('aviso');

btn_enviar.addEventListener('click', (e)=>{
    e.preventDefault();
    if(suma.value == "5"){
        //alert("Si envio")
        let api_url = "enviar_email.php";
        let data = new FormData(form_contacto);
        //data.append("dp_sid", 1);

        fetch(api_url, { method: "post", body: data })
        .then(res => res.text())
        .then(el => {
            if(el == "ok"){
                aviso.style.display = "block";
            }
            //console.log(el);
        })
        .catch(err => { console.log(err.message) });
    }
})