<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');


$this->start('tb_actions');
?>
<li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $product->id]) ?> </li>
<li><?= $this->Form->postLink(__('Excluir Produto'), ['action' => 'delete', $product->id], ['confirm' => __('Voce realmente deseja excluir este produto # {0}?', $product->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
<li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $product->id]) ?> </li>
<li><?= $this->Form->postLink(__('Excluir Produto'), ['action' => 'delete', $product->id], ['confirm' => __('Voce realmente deseja excluir este produto # {0}?', $product->id)]) ?> </li>
<li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?> </li>
<li><?= $this->Html->link(__('Novo Produto'), ['action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<div class="panel panel-default">
    <!-- Panel header -->
    <div class="panel-heading">
        <h3 class="panel-title"><?= h($product->name) ?></h3>
    </div>
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <tr>
            <td><?= __('Name') ?></td>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <td><?= __('Quantidade') ?></td>
            <td><?= h($product->quantidade) ?></td>
        </tr>
        <tr>
            <td><?= __('Id') ?></td>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <td><?= __('Price') ?></td>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <td><?= __('Dt Valid') ?></td>
            <td><?= h($product->dt_valid) ?></td>
        </tr>
        <tr>
            <td><?= __('Dt Frab') ?></td>
            <td><?= h($product->dt_frab) ?></td>
        </tr>
    </table>
</div>

