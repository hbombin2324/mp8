//si clico el sol el fons es posa groc
function sol(){
    document.body.style.background="yellow";
    document.getElementById("lluna").style.background="yellow";
}
//si clico la lluna el fons es posa negre
function lluna(){
    document.body.style.background="black";
    document.getElementById("lluna").style.background="black";
}
        
// inicialment onclick a sobre de l'element
// addEventlistener (esdeveniment, receptor);

document.getElementById("sol").addEventListener("click", sol);
document.getElementById("lluna").addEventListener("click", lluna);