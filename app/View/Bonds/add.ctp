<div class="bonds form">
<?php echo $this->Form->create('Bond'); ?>
	<fieldset>
		<legend><?php echo __('Add Bond'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('Bname');
		echo $this->Form->input('Company');
		echo $this->Form->input('primaryemail');
		echo $this->Form->input('cellphone');
		echo $this->Form->input('MaturityDate');
		echo $this->Form->input('Price');
		echo $this->Form->input('BondCount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bonds'), array('action' => 'index')); ?></li>
	</ul>
</div>
