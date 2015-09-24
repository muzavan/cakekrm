<div class="kategoris form">
<?php echo $this->Form->create('Kategori'); ?>
	<fieldset>
		<legend><?php echo __('Edit Kategori'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nama_kategori');
		echo $this->Form->input('link_gambar');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kategori.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Kategori.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Kategoris'), array('action' => 'index')); ?></li>
	</ul>
</div>
