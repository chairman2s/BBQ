<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipment Entity.
 *
 * @property int $Id
 * @property int $HeatSource_id
 * @property \App\Model\Entity\HeatSource $heat_source
 * @property string $Name
 * @property \Cake\I18n\Time $Created
 * @property \Cake\I18n\Time $Modified
 * @property string $user_id
 * @property \App\Model\Entity\User $user
 */
class Equipment extends Entity
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
        '*' => true,
        'Id' => false,
    ];
}
