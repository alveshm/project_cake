<?php
/* @var $this \Cake\View\View */
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']); ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', '<ul class="nav nav-sidebar">' . $this->fetch('tb_actions') . '</ul>'); ?>

<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('Nome'); ?></th>
            <th><?= $this->Paginator->sort('Preco'); ?></th>
            <th><?= $this->Paginator->sort('Validade'); ?></th>
            <th><?= $this->Paginator->sort('Fabricacao'); ?></th>
            <th><?= $this->Paginator->sort('Quantidade'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td><?= h($product->name) ?></td>
            <td><?= $this->Number->format($product->price) ?></td>
            <td><?= h($product->dt_valid) ?></td>
            <td><?= h($product->dt_frab) ?></td>
            <td><?= h($product->quantidade) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $product->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $product->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $product->id], ['confirm' => __('Voce Realmente deseja excluir este produto # {0}?', $product->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('Proximo') . ' >') ?>
    </ul>
</div>
