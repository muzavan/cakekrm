
var ajaxURL='./api';
var mData;
var grat;
var map,mcOptions,markers;
function loadData(){
  //console.log("loadData");
  $.get(ajaxURL,{},function(data){
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
  map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
  mcOptions = {gridSize: 50, maxZoom: 16};
  markers = [];
  var total=0;
  var data = JSON.parse(mData);
  //console.log(data);
  for(var i in data){
    var datum = data[i];
    var iconKategori = new google.maps.MarkerImage(
    datum.link_gambar,
    null, /* size is determined at runtime */
    null, /* origin is 0,0 */
    null, /* anchor is bottom center of the scaled image */
    new google.maps.Size(32, 32)
    );

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(datum.lat,datum.lng),
      content : "<b>" + datum.nama_proker + "</b>" + "<br/>"+ datum.nama_lembaga + "<br/>"+ "<b>Deskripsi</b> : <p style='width : 300;'>"+ datum.deskripsi_proker + "</p>",
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

function gantiData(mData){
  for(i = 0; i < markers.length ; i++){
    markers[i].setMap(null);
  }
  markers.length = 0;

  //retrieve new data
  var data = mData;
  //console.log(data);
  for(var i in data){
    var datum = data[i];
    
    var iconKategori = new google.maps.MarkerImage(
    datum.link_gambar,
    null, /* size is determined at runtime */
    null, /* origin is 0,0 */
    null, /* anchor is bottom center of the scaled image */
    new google.maps.Size(32, 32)
    );

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(datum.lat,datum.lng),
      content : "<b>" + datum.nama_proker + "</b>" + "<br/>"+ datum.nama_lembaga + "<br/>"+ "<b>Deskripsi</b> : <p style='width : 300;'>"+ datum.deskripsi_proker + "</p>",
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

function search(){
  var keyword = $('#search').val();
  var _data = {"keyword" : keyword};
  $.get(ajaxURL,_data,function(data){
   gantiData(data);
  });
}