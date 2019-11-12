<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiement Entity
 *
 * @property int $id
 * @property int $application_id
 * @property int $type_paiement_id
 * @property int $user_id
 * @property string $numero_carte
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Application $application
 * @property \App\Model\Entity\TypesPaiement $types_paiement
 */
class Paiement extends Entity
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
        'application_id' => true,
        'type_paiement_id' => true,
        'user_id' => true,
        'numero_carte' => true,
        'created' => true,
        'modified' => true,
        'application' => true,
        'types_paiement' => true
    ];
}
