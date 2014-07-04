<div class="participantes index">
	<h2><?php echo __('Participantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('nick'); ?></th>
			<th><?php echo $this->Paginator->sort('colombia'); ?></th>
			<th><?php echo $this->Paginator->sort('brasil'); ?></th>
			<th><?php echo $this->Paginator->sort('ganador'); ?></th>
			<th><?php echo $this->Paginator->sort('pago'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($participantes as $participante): ?>
	<tr>
		<td><?php echo h($participante['Participante']['id']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['nick']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['colombia']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['brasil']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['ganador']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['pago']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['created']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $participante['Participante']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $participante['Participante']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $participante['Participante']['id']), array(), __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?></li>
	</ul>
</div>
