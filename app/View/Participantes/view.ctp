<div class="participantes view">
<h2><?php echo __('Participante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nick'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['nick']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colombia'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['colombia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brasil'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['brasil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ganador'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['ganador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pago'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['pago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante'), array('action' => 'edit', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante'), array('action' => 'delete', $participante['Participante']['id']), array(), __('Are you sure you want to delete # %s?', $participante['Participante']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?> </li>
	</ul>
</div>
