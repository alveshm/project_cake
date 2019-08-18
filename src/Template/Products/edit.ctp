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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $product->id],
        ['confirm' => __('Deseja realmente exluir este produto # {0}?', $product->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $product->id],
        ['confirm' => __('Deseja realmente exluir este produto # {0}?', $product->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($product); ?>
<fieldset>
    <legend><?= __('Editar {0}', ['Produto']) ?></legend>
    <?php
    echo $this->Form->control('name',['label' => 'Nome']);
    echo $this->Form->label('unidade_medicao', 'Unidades de medida');
    $unidades = ['lt' => 'Litro', 'kg' => 'Quilograma', 'un' => 'Unidade'];
    echo $this->Form->select('unidade_medicao', $unidades, ['default' => 'lt'], ['label' => 'Unidades de Medida']);
    echo $this->Form->control('quantidade');
    echo $this->Form->control('price',['label' => 'Preco']);
    echo $this->Form->label('peresivel', 'Produto perecível');
    echo $this->Form->radio('peresivel', ['Sim', 'Nao']);
    echo $this->Form->control('dt_valid',['label' => 'Data de Validade']);
    echo $this->Form->control('dt_frab',['label' => 'Data de Fabricacao']);
    ?>
</fieldset>
<?= $this->Form->button(__("Salvar")); ?>
<?= $this->Form->end() ?>
<?= $this->prepend('script', $this->Html->script(['jquery-ui-1.12.1.custom/jquery-ui.min', 'jquery.mask.min', 'validator'])); ?>