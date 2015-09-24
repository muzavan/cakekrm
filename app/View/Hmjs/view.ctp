<div class="hmjs view">
<h2><?php echo __('Hmj'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Lembaga'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['nama_lembaga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Proker'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['nama_proker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskripsi Proker'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['deskripsi_proker']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kategori'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['kategori']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sasaran'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['sasaran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Output'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['output']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Waktu'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['waktu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rencana Anggaran'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['rencana_anggaran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lokasi'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['lokasi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['lng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($hmj['Hmj']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hmj'), array('action' => 'edit', $hmj['Hmj']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hmj'), array('action' => 'delete', $hmj['Hmj']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $hmj['Hmj']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Hmjs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hmj'), array('action' => 'add')); ?> </li>
	</ul>
</div>
