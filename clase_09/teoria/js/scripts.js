let app = document.getElementById('app');


fetch('contenido.html')
.then(res=> res.text() )
.then(contenido =>{
    app.innerHTML =  contenido;
})
.catch(err=>{ console.log(err.message) });