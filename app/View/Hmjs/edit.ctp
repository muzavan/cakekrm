<div class="hmjs form">
<?php echo $this->Form->create('Hmj'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hmj'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nama_lembaga');
		echo $this->Form->input('nama_proker');
		echo $this->Form->input('deskripsi_proker');
		echo $this->Form->input('kategori');
		echo $this->Form->input('sasaran');
		echo $this->Form->input('output');
		echo $this->Form->input('waktu');
		echo $this->Form->input('rencana_anggaran');
		echo $this->Form->input('lokasi');
		echo $this->Form->input('lat');
		echo $this->Form->input('lng');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hmj.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Hmj.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Hmjs'), array('action' => 'index')); ?></li>
	</ul>
</div>
