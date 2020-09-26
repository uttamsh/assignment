<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Router Entity
 *
 * @property int $id
 * @property string $sapid
 * @property string $hostname
 * @property string $loopback
 * @property string $mac_address
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Router extends Entity
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
        'sapid' => true,
        'hostname' => true,
        'loopback' => true,
        'mac_address' => true,
        'created' => true,
        'modified' => true,
    ];
}
