<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string|null $dt_valid
 * @property string $dt_frab
 * @property string|null $quantidade
 * @property string $unidade_medida
 * @property string $peresivel
 * @property string $unidade_monetaria
 */
class Product extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'price' => true,
        'dt_valid' => true,
        'dt_frab' => true,
        'quantidade' => true,
        'unidade_medida' => true,
        'peresivel' => true,
        'unidade_monetaria' => true
    ];
}
