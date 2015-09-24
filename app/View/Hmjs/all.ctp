<html>
<head>
  <title>Pemetaan Komunitas </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <style>
  html,body{
    height: 100%;
    width:100%
  }
  #googleMap{
    width:100%;
    height: 100%;
  }
  .fly-box{
    z-index:200;
    position: fixed;
    bottom: 10px;
    left:12px;
    background-color: rgba(255,255,255,0.6);
  }
  
  .fly-box img{
    height : 15px;
    width : 15px;
  }
  .container{
    height: 100%;
    width: 100%;
    padding: 0;
    margin: 0;
  }
  </style>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.9"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <?php
    echo $this->Html->script('markerclusterer');
    echo $this->Html->script('all_hmj');
  ?>
</head>
<body>
  <div class='fly-box well' style=''>
    <h3>Kementerian Konservasi Relasi Masyarakat</h3>
    <?php
      foreach($kategoris as $value){
          echo  "<div><img height='32' width='32' src='".$value['link_gambar']."'> : <span>".$value['nama_kategori']."</span></div>";
        }
    ?>
  </div>
  <div class='container'>
    <div id="googleMap"></div>
  </div>
</body>
</html>