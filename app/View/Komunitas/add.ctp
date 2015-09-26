<div class="komunitas form">
<?php echo $this->Form->create('Komunita'); ?>
	<fieldset>
		<legend><?php echo __('Add Komunita'); ?></legend>
	<?php
		echo $this->Form->input('nama_lembaga');
		echo $this->Form->input('deskripsi_lembaga');
		echo $this->Form->input('kategori');
		echo $this->Form->input('alamat');
	?>

	<div hidden='true'>
	<?php
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
	?>
	</div>
	<center>
	<div id='googleMap' style='width:90%;height:270px;'>
		
	</div>
	</center>
	<?php
		echo $this->Form->input('contact_person');
		echo $this->Form->input('posisi');
		echo $this->Form->input('nomor_telepon');
		echo $this->Form->input('website');
		echo $this->Form->input('media_sosial');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Komunitas'), array('action' => 'index')); ?></li>
	</ul>
</div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.9"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
	var jData;
	function initialize() {
	        var posLat = ($('#KomunitaLat').val()=='') ? -6.891167 : $('#KomunitaLat').val();
	        var posLng = ($('#KomunitaLng').val()=='') ? 107.610611 : $('#KomunitaLng').val();         
	        var myCenter = new google.maps.LatLng(posLat, posLng);
	        var mapProp = {
	            center:myCenter,
	            zoom:16,
	            mapTypeId:google.maps.MapTypeId.ROADMAP
	        };
	        $('.posisi').hide();
	        $('#googleMap').height($('textarea[name="deskripsi_lembaga"]').height());
	        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);        
	        var newMarker = new google.maps.Marker({position : myCenter});
	        newMarker.setMap(map);
	        google.maps.event.addListener(map,'click',function(e) {
	        var pos= new google.maps.LatLng(e.latLng.A,e.latLng.F);
	            newMarker.setPosition(pos);
	            $('#KomunitaLat').val(e.latLng.A.toFixed(6));
	            $('#KomunitaLng').val(e.latLng.F.toFixed(6));
	        });
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>