<?php
use Migrations\AbstractSeed;

/**
 * Applications seed.
 */
class ApplicationsSeed extends AbstractSeed
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
                'id' => '2',
                'name' => 'Minecraft - Pocket Edition',
                'description' => '',
                'prix' => '9.99',
                'evaluation' => '0',
                'file_id' => NULL,
                'created' => '2019-09-16 16:28:18',
                'modified' => '2019-09-16 16:28:18',
            ],
            [
                'id' => '6',
                'name' => 'YouTube Music',
                'description' => 'Permet d\'écouter de la musique même avec le téléphone en mode veille.',
                'prix' => '13.99',
                'evaluation' => '0',
                'file_id' => NULL,
                'created' => '2019-10-09 18:08:27',
                'modified' => '2019-10-09 18:08:27',
            ],
            [
                'id' => '7',
                'name' => 'Dictionnaire Larousse - Edition Complete',
                'description' => 'Le dictionnaire Larousse digital avec dictionnaire de grammaire, synonyme et encyclopédie inclus.',
                'prix' => '19.99',
                'evaluation' => '5',
                'file_id' => NULL,
                'created' => '2019-10-09 18:11:54',
                'modified' => '2019-10-09 18:11:54',
            ],
        ];

        $table = $this->table('applications');
        $table->insert($data)->save();
    }
}
