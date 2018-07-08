<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Land Entity
 *
 * @property int $admin_id
 * @property int $id
 * @property string $name
 * @property float $acre
 * @property float $kanal
 * @property float $marla
 * @property string $location
 * @property string $khasra
 * @property string $best_for
 * @property float $demand
 * @property float $cost
 * @property string $remarks
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Admin $admin
 */
class Land extends Entity
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
        'admin_id' => true,
        'name' => true,
        'acre' => true,
        'kanal' => true,
        'marla' => true,
        'location' => true,
        'khasra' => true,
        'best_for' => true,
        'demand' => true,
        'cost' => true,
        'remarks' => true,
        'modified' => true,
        'created' => true,
        'admin' => true
    ];
}
