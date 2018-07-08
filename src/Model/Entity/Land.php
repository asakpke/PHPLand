<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Land Entity
 *
 * @property int $admin_id
 * @property int $id
 * @property string $name
 * @property string $location
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
        'location' => true,
        'modified' => true,
        'created' => true,
        'admin' => true
    ];
}
