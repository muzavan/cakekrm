<div class="kategoris view">
<h2><?php echo __('Kategori'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kategori['Kategori']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Kategori'); ?></dt>
		<dd>
			<?php echo h($kategori['Kategori']['nama_kategori']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Gambar'); ?></dt>
		<dd>
			<img src="<?php echo h($kategori['Kategori']['link_gambar']); ?>" height="32" width="32" />
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kategori'), array('action' => 'edit', $kategori['Kategori']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kategori'), array('action' => 'delete', $kategori['Kategori']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kategori['Kategori']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Kategoris'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kategori'), array('action' => 'add')); ?> </li>
	</ul>
</div>
