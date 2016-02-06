<div class="bonds index">
	<h2><?php echo __('Bonds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('Bname'); ?></th>
			<th><?php echo $this->Paginator->sort('Company'); ?></th>
			<th><?php echo $this->Paginator->sort('primaryemail'); ?></th>
			<th><?php echo $this->Paginator->sort('cellphone'); ?></th>
			<th><?php echo $this->Paginator->sort('MaturityDate'); ?></th>
			<th><?php echo $this->Paginator->sort('Price'); ?></th>
			<th><?php echo $this->Paginator->sort('BondCount'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bonds as $bond): ?>
	<tr>
		<td><?php echo h($bond['Bond']['id']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['name']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['Bname']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['Company']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['primaryemail']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['cellphone']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['MaturityDate']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['Price']); ?>&nbsp;</td>
		<td><?php echo h($bond['Bond']['BondCount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bond['Bond']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bond['Bond']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bond['Bond']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bond['Bond']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Bond'), array('action' => 'add')); ?></li>
	</ul>
</div>
