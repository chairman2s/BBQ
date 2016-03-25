<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProbeLog Entity.
 *
 * @property int $Id
 * @property int $Probes_id
 * @property int $Events_id
 * @property int $Value
 * @property \Cake\I18n\Time $Timestamp
 * @property \App\Model\Entity\Probe $probe
 * @property \App\Model\Entity\Event $event
 */
class ProbeLog extends Entity
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
