<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itemstock Entity
 *
 * @property int $id
 * @property string $itemheadid
 * @property \Cake\I18n\Time $expendituredate
 * @property int $quantity
 * @property string $remark
 * @property \Cake\I18n\Time $created
 */
class Itemstock extends Entity
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
        'id' => false
    ];
}
