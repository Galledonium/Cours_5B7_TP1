<?php
use Migrations\AbstractSeed;

/**
 * Paiements seed.
 */
class PaiementsSeed extends AbstractSeed
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
                'application_id' => '2',
                'type_paiement_id' => '1',
                'user_id' => '1',
                'numero_carte' => '23408959082356',
                'created' => '2019-09-16 16:31:06',
                'modified' => '2019-10-07 16:15:36',
            ],
            [
                'id' => '4',
                'application_id' => '2',
                'type_paiement_id' => '1',
                'user_id' => '3',
                'numero_carte' => '23408959082356',
                'created' => '2019-10-09 17:48:12',
                'modified' => '2019-10-09 17:48:12',
            ],
            [
                'id' => '10',
                'application_id' => '2',
                'type_paiement_id' => '1',
                'user_id' => '1',
                'numero_carte' => '23408959082356',
                'created' => '2019-10-15 19:37:06',
                'modified' => '2019-10-15 19:37:06',
            ],
            [
                'id' => '11',
                'application_id' => '2',
                'type_paiement_id' => '1',
                'user_id' => '3',
                'numero_carte' => '23408959082356',
                'created' => '2019-10-15 22:20:55',
                'modified' => '2019-10-15 22:20:55',
            ],
        ];

        $table = $this->table('paiements');
        $table->insert($data)->save();
    }
}
