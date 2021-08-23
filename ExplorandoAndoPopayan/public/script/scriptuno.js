//BOTONES
var clickuno = document.getElementById('veruno');
var clickdos = document.getElementById('verdos');
var clicktres = document.getElementById('vertres');
var clickcuatro = document.getElementById('vercuatro');

//CONTENEDORES
var contenedordescripcionuno = document.querySelector('.contenedor-descripcionuno');
var contenedordescripciondos = document.querySelector('.contenedor-descripciondos');
var contenedordescripciontres = document.querySelector('.contenedor-descripciontres');
var contenedordescripcioncuatro = document.querySelector('.contenedor-descripcioncuatro');


//CLICK CADA BOTON
clickuno.addEventListener('click', veruno);
clickdos.addEventListener('click',verdos);
clicktres.addEventListener('click',vertres);
clickcuatro.addEventListener('click',vercuatro);
function veruno() {
  contenedordescripcionuno.classList.toggle("contenedor-descripcionvermas");
  clickuno.classList.toggle("desaparecevermas");
 
 
}
function verdos() {
     contenedordescripciondos.classList.toggle("contenedor-descripcionvermas");
     clickdos.classList.toggle("desaparecevermas");
    
}
function vertres() {
     contenedordescripciontres.classList.toggle("contenedor-descripcionvermas");
     clicktres.classList.toggle("desaparecevermas");
    
}
function vercuatro() {
     contenedordescripcioncuatro.classList.toggle("contenedor-descripcionvermas");
     clickcuatro.classList.toggle("desaparecevermas");
    
}
