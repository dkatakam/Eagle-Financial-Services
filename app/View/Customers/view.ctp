<div class="customers view">
<h2><?php echo __('Customer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Streetaddress'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['streetaddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primaryemail'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['primaryemail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Homephone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['homephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cellphone'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['cellphone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($customer['Customer']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer'), array('action' => 'edit', $customer['Customer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Customer'), array('action' => 'delete', $customer['Customer']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $customer['Customer']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Customers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investments'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stocks'), array('controller' => 'stocks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stocks'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Investments'); ?></h3>
	<?php if (!empty($customer['Investments'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Category'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Acquiredvalue'); ?></th>
		<th><?php echo __('Acquireddate'); ?></th>
		<th><?php echo __('Recentvalue'); ?></th>
		<th><?php echo __('Recentdate'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Investments'] as $investments): ?>
		<tr>
			<td><?php echo $investments['id']; ?></td>
			<td><?php echo $investments['customer_id']; ?></td>
			<td><?php echo $investments['category']; ?></td>
			<td><?php echo $investments['description']; ?></td>
			<td><?php echo $investments['acquiredvalue']; ?></td>
			<td><?php echo $investments['acquireddate']; ?></td>
			<td><?php echo $investments['recentvalue']; ?></td>
			<td><?php echo $investments['recentdate']; ?></td>
			<td><?php echo $investments['created']; ?></td>
			<td><?php echo $investments['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'investments', 'action' => 'view', $investments['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'investments', 'action' => 'edit', $investments['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'investments', 'action' => 'delete', $investments['id']), array('confirm' => __('Are you sure you want to delete # %s?', $investments['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Investments'), array('controller' => 'investments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stocks'); ?></h3>
	<?php if (!empty($customer['Stocks'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Customer Id'); ?></th>
		<th><?php echo __('Stsymbol'); ?></th>
		<th><?php echo __('Stname'); ?></th>
		<th><?php echo __('Noshares'); ?></th>
		<th><?php echo __('Purchaseprice'); ?></th>
		<th><?php echo __('Datepurchased'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($customer['Stocks'] as $stocks): ?>
		<tr>
			<td><?php echo $stocks['id']; ?></td>
			<td><?php echo $stocks['customer_id']; ?></td>
			<td><?php echo $stocks['stsymbol']; ?></td>
			<td><?php echo $stocks['stname']; ?></td>
			<td><?php echo $stocks['noshares']; ?></td>
			<td><?php echo $stocks['purchaseprice']; ?></td>
			<td><?php echo $stocks['datepurchased']; ?></td>
			<td><?php echo $stocks['created']; ?></td>
			<td><?php echo $stocks['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stocks', 'action' => 'view', $stocks['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stocks', 'action' => 'edit', $stocks['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stocks', 'action' => 'delete', $stocks['id']), array('confirm' => __('Are you sure you want to delete # %s?', $stocks['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stocks'), array('controller' => 'stocks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
