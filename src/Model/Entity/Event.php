<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity.
 *
 * @property int $Id
 * @property string $Name
 * @property \Cake\I18n\Time $Date
 * @property int $Cut_id
 * @property \App\Model\Entity\Cut $cut
 * @property int $Equipment_id
 * @property \App\Model\Entity\Equipment $equipment
 */
class Event extends Entity
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
