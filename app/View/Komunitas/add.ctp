<div class="komunitas form">
<?php echo $this->Form->create('Komunita'); ?>
	<fieldset>
		<legend><?php echo __('Add Komunita'); ?></legend>
	<?php
		echo $this->Form->input('nama_lembaga');
		echo $this->Form->input('deskripsi_lembaga');
		echo $this->Form->input('kategori');
		echo $this->Form->input('alamat');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
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
