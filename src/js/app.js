document.addEventListener('DOMContentLoaded', function(){
    showMenu();

    darkMode();
});

function showMenu() {

    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenu.addEventListener('click', e=>{

        const navegacion = document.querySelector('.navegacion');
        navegacion.classList.toggle('mostrar')
    })
 
};


function darkMode() {
    
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    const preferenciaModoPantalla = window.matchMedia('(prefers-color-scheme: dark)')

    // console.log(preferenciaModoPantalla.matches);
    
    /*
    // para que cargue automaticamente el modo de pantalla preferido por el usuario
    if(preferenciaModoPantalla){
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
    //para que cambie automaticamente si existe un cambio en el sistema del usuario
    preferenciaModoPantalla.addEventListener('change', function(){
        if(preferenciaModoPantalla){
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    })
    */



    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');

    })

}

new AutoNumeric.multiple('.AutoPrecio',{
    currencySymbol: ' $',
    currencySymbolPlacement: 'p'
}).norhtAmerica();