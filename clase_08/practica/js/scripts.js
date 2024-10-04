let codigo_color = document.getElementById('codigo_color');
let resultado = document.getElementById('resultado');
let teclado = document.getElementById('teclado');

let texto_codigo = "";

teclado.addEventListener('click', (e)=>{
    let v = e.target.dataset.valor;
    let x = e.target;
    
    if(texto_codigo.length < 6){

        if(x.id != "teclado"){
            texto_codigo += v;
            
            codigo_color.innerHTML = texto_codigo;
        }else{
            alert('para chambon, estas apretando el teclado directamente')
        }
    }
    if(texto_codigo.length == 6){
        resultado.style.background = `#${texto_codigo}`;
        texto_codigo = "";
    }


    
    
})