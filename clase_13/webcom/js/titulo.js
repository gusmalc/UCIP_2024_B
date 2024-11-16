class Titulo extends HTMLElement{
    
    constructor(){
        super();
        this.size;  
        this.color;
        this.texto;
        this.borde_color;
        this.attachShadow({ mode: "open" });
    }
    static get observedAttributes(){
        return ['color','size', 'texto','borde_color'];
    }    
    attributeChangedCallback(nameAtr, oldValue, newValue){    
        switch (nameAtr) {
            case "color":
                this.color = newValue;
                break;   
            case "size":
                this.size = newValue;
                break; 
            case "texto":
                this.texto = newValue;
                break;
            case "borde_color":
                this.borde_color = newValue;
                break;
    }
            
    }
    connectedCallback(){
        
        let tit = `
        <style>        
        .titulo{
            font-size:  ${this.size}; 
            color:  ${this.color};
            padding: 15px;
            border: 1px solid  ${this.borde_color}
        }
       
        </style>
        <h1 class='titulo'>${this.texto} </h1>      
        `;
        
       this.shadowRoot.innerHTML = tit;
       
    }

   c
    
}
window.customElements.define("mi-titulo", Titulo);