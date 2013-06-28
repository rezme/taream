<!DOCTYPE html>
<html>
<style>
  h1{
    width: 100%;
    font-family: helvetica;
    color: white;
    font-size: 20px;
    margin: auto;
    background-color: Black;
    text-align: center;
    padding: 5px 0 5px;
  }
  body{
    background-color: #CCC;
  }
  p{
    color: white;
  }
  .buttonC{
    border: solid 2px #038C7E;
    text-align: center;
    background-color: #5ABFAD;
    font-family: helvetica;
    width: 150px;
    margin: 5% auto;
    display: block;
  }
  .Otro{
    font-family: helvetica;
    Background-color: gray;
    color: white;
    font-style: italic;
  }
</style>
<head>
<meta http-equiv="Content-type" content="text/html;charset=utf-8">
<meta name="viewport" id="viewport" content="width=device-width, height=device-height, initial-scale=1.0,
maximum-scale=1.0, user-scalable=no;" />
<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
<script type="text/javascript" charset="utf-8">
function onLoad(){
document.addEventListener("deviceready",onDeviceReady,false);
}
function alertDismissed() {   
  }
function onDeviceReady() {
document.addEventListener("volumedownbutton", onVolumeDownKeyDown, false);
document.addEventListener("volumeupbutton", upbutton, false);
document.addEventListener("menubutton", onMenuKeyDown, false);
document.addEventListener("resume", onResume, false);
}
function onVolumeDownKeyDown() {
  navigator.notification.alert("Wawawa",alertDismissed,"Lalala","fin");
}
function upbutton(){
  navigator.notification.alert("Wawawa",alertDismissed,"Lalala","fin");
}
function onResume(){
  navigator.notification.alert("Has regresado a la aplicacion",alertDismissed,"","Aceptar");
}
function caracteristicas(){
  var element = document.getElementById('propiedades');
        element.innerHTML = 'Nombre del dispositivo: '  + device.model + '<br />' +
                            'Plataforma: ' + device.platform + '<br />' + 
                            'Version: '  + device.version  + '<br />';
}
function onMenuKeyDown() {
    navigator.camera.getPicture(onSuccess, onFail, { quality: 50, 
    destinationType: Camera.DestinationType.FILE_URI }); 
function onSuccess(imageURI) {
    var image = document.getElementById('myImage');
    image.src = imageURI;
    navigator.notification.alert("Se guardo exitosamente la foto",alertDismissed,"Aviso","Aceptar");
}
function onFail() {
    navigator.notification.alert("No se guardo ninguna foto",alertDismissed,"Aviso","Aceptar");
}
    }
</script>
</head>
<body onload="onLoad();">
<h1>Herramientas</h1>
<button class="buttonC" onclick="caracteristicas();">Mostrar <br /> Caracteristicas</button>
<p id="propiedades"></p>
<?php
for($i=0;$i<10;$i++){
  echo $i;
	}
?>
<p class="Otro">Para abrir la cámara presiona la tecla menú/opciones</p>
</body>
</html>
