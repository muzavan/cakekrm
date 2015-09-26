<div class="kategoris index">
	<h2><?php echo __('Kategoris'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_kategori'); ?></th>
			<th><?php echo $this->Paginator->sort('link_gambar'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($kategoris as $kategori): ?>
	<tr>
		<td><?php echo h($kategori['Kategori']['id']); ?>&nbsp;</td>
		<td><?php echo h($kategori['Kategori']['nama_kategori']); ?>&nbsp;</td>
		<td><img src="<?php echo h($kategori['Kategori']['link_gambar']); ?>" height="32" width="32"/>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kategori['Kategori']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kategori['Kategori']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kategori['Kategori']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $kategori['Kategori']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Kategori'), array('action' => 'add')); ?></li>
	</ul>
</div>
