<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EvaluationsPaiement Entity
 *
 * @property int $id
 * @property int $paiement_id
 * @property int $evaluation_id
 *
 * @property \App\Model\Entity\Paiement $paiement
 * @property \App\Model\Entity\Evaluation $evaluation
 */
class EvaluationsPaiement extends Entity
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
        'paiement_id' => true,
        'evaluation_id' => true,
        'paiement' => true,
        'evaluation' => true
    ];
}
