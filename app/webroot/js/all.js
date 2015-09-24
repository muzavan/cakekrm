
var ajaxURL='./api';
var mData;
var grat;
function loadData(){
  var _data = {};
  //console.log("loadData");
  $.get(ajaxURL,_data,function(data){
   visualisasiData(data);
  });
}

function initialize(){
//console.log("Initialize");
  loadData();
}

google.maps.event.addDomListener(window, 'load', initialize);

function visualisasiData(mData){ 
  var mapProp = {
    center:new google.maps.LatLng(-6.891167, 107.610611),
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var mcOptions = {gridSize: 50, maxZoom: 16};
  var markers = [];
  var total=0;
  var data = JSON.parse(mData);
  for(var i in data){
    var datum = data[i];
    //console.log(data[i]);
    var iconKategori = new google.maps.MarkerImage(
    datum.link_gambar,
    null, /* size is determined at runtime */
    null, /* origin is 0,0 */
    null, /* anchor is bottom center of the scaled image */
    new google.maps.Size(32, 32)
    );

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(datum.lat,datum.lng),
      content : datum.nama_lembaga+ "<br/>"+datum.deskripsi_lembaga+ "<br/>"+ "Kontak : "+ datum.nomor_telepon + "| "+datum.contact_person+"("+datum.posisi+")<br/>",
      icon : iconKategori,
      jumlah : 1,
    });
    google.maps.event.addListener(marker, 'click', function() {
      var infowindow = new google.maps.InfoWindow({});
      infowindow.setContent(this.content);
      infowindow.open(map, this);
    });
    
    markers.push(marker);
  }

  var markerClusterer = new MarkerClusterer(map, markers, mcOptions);
}