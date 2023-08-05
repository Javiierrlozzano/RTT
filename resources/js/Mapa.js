
let map = L.map('map').setView([4.639386,-74.082412],6)

//Agregar tilelAyer mapa base desde openstreetmap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
map.flyTo([6.45813,-71.7388831], 15);

var array=[];

function setMaps(Logs){
 
for (var i in Logs) {
    array.push([parseFloat(Logs[i].Latitud),parseFloat(Logs[i].Longitud)]) 
  
  }
  var polygon = L.polyline( 
    array
  ).addTo(map);

}






