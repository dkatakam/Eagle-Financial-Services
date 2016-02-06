<div class="bonds view">
<h2><?php echo __('Bond'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bname'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['Bname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['Company']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primaryemail'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['primaryemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellphone'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['cellphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('MaturityDate'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['MaturityDate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['Price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BondCount'); ?></dt>
		<dd>
			<?php echo h($bond['Bond']['BondCount']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bond'), array('action' => 'edit', $bond['Bond']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bond'), array('action' => 'delete', $bond['Bond']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bond['Bond']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bonds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bond'), array('action' => 'add')); ?> </li>
	</ul>
</div>
