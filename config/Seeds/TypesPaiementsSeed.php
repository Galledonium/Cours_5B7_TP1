<?php
use Migrations\AbstractSeed;

/**
 * TypesPaiements seed.
 */
class TypesPaiementsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'typePaiement' => 'Débit',
            ],
            [
                'id' => '2',
                'typePaiement' => 'Crédit',
            ],
            [
                'id' => '3',
                'typePaiement' => 'Carte Cadeau',
            ],
        ];

        $table = $this->table('types_paiements');
        $table->insert($data)->save();
    }
}
