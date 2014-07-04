<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Add Participante'); ?></legend>
	<?php
		echo $this->Form->input('cedula');
		echo $this->Form->input('nick');
		echo $this->Form->input('colombia');
		echo $this->Form->input('brasil');
		echo $this->Form->input('ganador');
		echo $this->Form->input('pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
	</ul>
</div>
