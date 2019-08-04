console.log("holas regsitro");
var inputName = document.querySelector("[name=name]");
var mensajesCorrecion = document.querySelectorAll(".errores");
console.log(mensajesCorrecion[0]);

inputName.onblur = function() {
  var nombre = inputName.value;
  console.log(nombre);
  if (!esNombreValido(nombre) ||  nombre.length > 10) {
      mensajesCorrecion[0].innerText = "nombre invalido o mayor a 10 caracteres";
      mensajesCorrecion[0].style.color = "red";
  }else {
      mensajesCorrecion[0].innerText = "";
  }
}
//no hay tres letras repetidas
function esNombreValido(nombre){
  for (var i = 0; i < nombre.length - 2; i++) {
    if (nombre[i] == nombre[i+1] && nombre[i+1] == nombre[i+2]) {
      return false;
      // return "tiene muchas: " + nombre[i];
    }
  }
  return true;
}

/*API PAISES*/
var selectorPais =  document.querySelector(".pais");
fetch('https://api.mercadolibre.com/classified_locations/countries')
.then(function(response) {
  return response.json()
})
.then(function(information) {
    information.forEach(function(elem) {
      var option = document.createElement('option');
      option.innerText = elem.name ;
      option.setAttribute('value',elem.id);
      selectorPais.append(option);
    });
})
.catch(function(error){
  console.log(error);
})


selectorPais.onclick = function(){
    var selectorCiudad =  document.querySelector(".ciudad");
  //Borra todo tus options
    while (selectorCiudad.hasChildNodes()) {
  	   selectorCiudad.removeChild(selectorCiudad.firstChild);
    }
    //console.log(selectorCiudad); es un select

    var idElegido = document.querySelector('.pais').value;
    console.log(idElegido);

    fetch('https://api.mercadolibre.com/classified_locations/countries/' + idElegido)
    .then(function(response) {
      return response.json()
    })
    .then(function(information) {
      console.log(information.states);
  //    var selectorCiudad =  document.querySelector(".ciudad");
        information.states.forEach(function(elem) {
          var optionCiudad = document.createElement('option');
          optionCiudad.innerText = elem.name ;
          optionCiudad.setAttribute('value',elem.name);
      //    console.log(optionCiudad);
          selectorCiudad.append(optionCiudad);
        });
    })
    .catch(function(error){
      console.log(error);
    })
}
