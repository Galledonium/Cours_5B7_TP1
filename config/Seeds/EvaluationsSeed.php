<?php
use Migrations\AbstractSeed;

/**
 * Evaluations seed.
 */
class EvaluationsSeed extends AbstractSeed
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
                'id' => '3',
                'commentaires' => '446346',
                'note' => '5',
                'created' => '2019-10-07 16:13:56',
                'modified' => '2019-10-07 16:13:56',
            ],
        ];

        $table = $this->table('evaluations');
        $table->insert($data)->save();
    }
}
