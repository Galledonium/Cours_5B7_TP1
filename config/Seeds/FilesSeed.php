<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
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
                'name' => 'apps.45782.9007199266731945.debbc4f1-cde0-491b-8c6f-b6b015eecab6.png',
                'path' => 'uploads/files/',
                'created' => '2019-10-15 21:30:09',
                'modified' => '2019-10-15 21:30:09',
                'status' => '1',
            ],
            [
                'id' => '2',
                'name' => 'apps.45782.9007199266731945.debbc4f1-cde0-491b-8c6f-b6b015eecab6.png',
                'path' => 'uploads/files/',
                'created' => '2019-10-15 21:30:52',
                'modified' => '2019-10-15 21:30:52',
                'status' => '1',
            ],
            [
                'id' => '3',
                'name' => 'apps.45782.9007199266731945.debbc4f1-cde0-491b-8c6f-b6b015eecab6.png',
                'path' => 'uploads/files/',
                'created' => '2019-10-15 21:43:51',
                'modified' => '2019-10-15 21:43:51',
                'status' => '1',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}
