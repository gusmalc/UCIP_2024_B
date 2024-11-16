class persona{
    constructor(nombre,edad) {
        this.nombre = nombre;
        this.edad = edad;
    }

    getNombre(){
        return this.nombre;
    }
    
    setNombre(n){
        this.nombre = n;
    }

}

let p1 = new persona('Juan', 25);

//alert(p1.getNombre());

class alumno extends persona{
    constructor(nombre,edad, estado) {
        super(nombre,edad);
        this.estado = estado;
    }
    getNombre(){
        return this.nombre;
    }

}

class Abc{
    static alll(){
        alert('ooooooooooooooo')
    }
}

//let a1 = new alumno('Maria', 25, 'Aprobada')

Abc.alll();