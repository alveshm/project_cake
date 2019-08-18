<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->prepend('css', $this->Html->css(['jquery-ui']));
$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($product); ?>
<fieldset>
    <legend><?= __('Novo {0}', ['Produto']) ?></legend>
    <?php
    echo $this->Form->control('name',['label' => 'Nome']);
    echo $this->Form->label('unidade_medida', 'Unidades de medida');
    $unidades = ['lt' => 'Litro', 'kg' => 'Quilograma', 'un' => 'Unidade'];
    echo $this->Form->select('unidade_medida', $unidades, ['default' => 'lt'], ['label' => 'Unidades de Medida']);
    echo $this->Form->control('quantidade', ['required' => false]);
    echo $this->Form->control('price',['label' => 'Preco']);
    echo $this->Form->label('peresivel', 'Produto perecível');
    echo '<div class="form-group">';
    echo $this->Form->radio('peresivel', ['Sim', 'Nao']);
    echo '</div>';
    echo $this->Form->control('dt_valid',['label' => 'Data de Validade','required' => false]);
    echo $this->Form->control('dt_frab',['label' => 'Data de Fabricacao']);
    ?>
</fieldset>
<?= $this->Form->button(__("Adicionar")); ?>
<?= $this->Form->end() ?>
<?= $this->prepend('script', $this->Html->script(['jquery-ui-1.11.4/jquery-ui.min', 'jquery.mask.min', 'validator'])); ?>
