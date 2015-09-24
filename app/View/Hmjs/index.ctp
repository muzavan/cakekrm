<div class="hmjs index">
	<h2><?php echo __('Hmjs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_lembaga'); ?></th>
			<th><?php echo $this->Paginator->sort('nama_proker'); ?></th>
			<th><?php echo $this->Paginator->sort('deskripsi_proker'); ?></th>
			<th><?php echo $this->Paginator->sort('kategori'); ?></th>
			<th><?php echo $this->Paginator->sort('sasaran'); ?></th>
			<th><?php echo $this->Paginator->sort('output'); ?></th>
			<th><?php echo $this->Paginator->sort('waktu'); ?></th>
			<th><?php echo $this->Paginator->sort('rencana_anggaran'); ?></th>
			<th><?php echo $this->Paginator->sort('lokasi'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('lng'); ?></th>
			<th><?php echo $this->Paginator->sort('created_at'); ?></th>
			<th><?php echo $this->Paginator->sort('updated_at'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($hmjs as $hmj): ?>
	<tr>
		<td><?php echo h($hmj['Hmj']['id']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['nama_lembaga']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['nama_proker']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['deskripsi_proker']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['kategori']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['sasaran']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['output']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['waktu']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['rencana_anggaran']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['lokasi']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['lat']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['lng']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['created_at']); ?>&nbsp;</td>
		<td><?php echo h($hmj['Hmj']['updated_at']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $hmj['Hmj']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hmj['Hmj']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hmj['Hmj']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hmj['Hmj']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Hmj'), array('action' => 'add')); ?></li>
	</ul>
</div>
