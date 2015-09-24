<div class="komunitas view">
<h2><?php echo __('Komunita'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nama Lembaga'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['nama_lembaga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deskripsi Lembaga'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['deskripsi_lembaga']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kategori'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['kategori']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alamat'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['alamat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lng'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['lng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Person'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['contact_person']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posisi'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['posisi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nomor Telepon'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['nomor_telepon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Media Sosial'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['media_sosial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($komunita['Komunita']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Komunita'), array('action' => 'edit', $komunita['Komunita']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Komunita'), array('action' => 'delete', $komunita['Komunita']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $komunita['Komunita']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Komunitas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Komunita'), array('action' => 'add')); ?> </li>
	</ul>
</div>
