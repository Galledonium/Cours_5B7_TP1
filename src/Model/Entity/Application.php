<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Application Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property float $prix
 * @property int|null $evaluation
 * @property int|null $file_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $categorie_id
 * @property int|null $subcategorie_id
 *
 * @property \App\Model\Entity\File $file
 * @property \App\Model\Entity\Subcategory $subcategory
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Paiement[] $paiements
 * @property \App\Model\Entity\User[] $users
 */
class Application extends Entity
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
        'description' => true,
        'prix' => true,
        'evaluation' => true,
        'file_id' => true,
        'created' => true,
        'modified' => true,
        'categorie_id' => true,
        'subcategorie_id' => true,
        'file' => true,
        'subcategory' => true,
        'category' => true,
        'paiements' => true,
        'users' => true
    ];
}
