var $ = function(id){
  return document.getElementById(id);
};

var on = '../images/light_bulb_on-01.svg';
var off = '../images/light_bulb_off-02.svg';

var nLightToggle = function(){
  var nValue = $("northLights").value;

  if (nValue == 2) {
    $("north").src=on;
  }else
  {
    $("north").src=off;
  }

  var wValue = $("westLights").value;

  if (wValue == 2) {
    $("west").src=on;
  }else
  {
    $("west").src=off;
  }

  var eValue = $("eastLights").value;

  if (eValue == 2) {
    $("east").src=on;
  }else
  {
    $("east").src=off;
  }

  var sValue = $("southLights").value;

  if (sValue == 2) {
    $("south").src=on;
  }else
  {
    $("south").src=off;
  }

  var aValue = $("allLights").value;


  if(aValue==3){
    $("all").src=on;
    $("northLights").value=2;
    $("north").src=on;
    $("southLights").value=2;
    $("south").src=on;
    $("eastLights").value=2;
    $("east").src=on;
    $("westLights").value=2;
    $("west").src=on;
  }else if (aValue==2) {
    $("all").src=off;
  }else if (aValue==1) {
    $("all").src=off;
    $("northLights").value=1;
    $("north").src=off;
    $("southLights").value=1;
    $("south").src=off;
    $("eastLights").value=1;
    $("east").src=off;
    $("westLights").value=1;
    $("west").src=off;
  }
};

window.onload = function(){
  $("northLights").onclick = nLightToggle;
  $("southLights").onclick = nLightToggle;
  $("eastLights").onclick = nLightToggle;
  $("westLights").onclick = nLightToggle;
  $("allLights").onclick = nLightToggle;
};
