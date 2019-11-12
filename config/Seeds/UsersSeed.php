<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'permissions' => '0',
                'username' => 'TestBoy3',
                'password' => '$2y$10$MGo9XleC3wdrBfneDo/05..U.EPZ3zACQq5z7AVQNcUsVH/P/DT1G',
                'email' => 'testboy@gmail.com',
                'created' => '0000-00-00 00:00:00',
                'modified' => '2019-10-08 23:34:40',
            ],
            [
                'id' => '3',
                'permissions' => '1',
                'username' => 'UltimateTest',
                'password' => 'test',
                'email' => 'testboy10@gmail.com',
                'created' => '2019-09-10 16:15:33',
                'modified' => '2019-10-15 22:55:25',
            ],
            [
                'id' => '5',
                'permissions' => '2',
                'username' => 'testboy4',
                'password' => '$2y$10$.Car0o1tRVoww2d5nRmX0uaM/7Um/SuTE2D5xE/BwjQ5jp1FqSGDe',
                'email' => 'testboy4@gmail.com',
                'created' => '2019-09-16 16:29:06',
                'modified' => '2019-10-08 23:35:14',
            ],
            [
                'id' => '6',
                'permissions' => '0',
                'username' => 'bigboy3',
                'password' => 'bigboy3',
                'email' => 'bigboy3@gmail.com',
                'created' => '2019-10-15 22:16:02',
                'modified' => '2019-10-15 22:16:02',
            ],
            [
                'id' => '7',
                'permissions' => '0',
                'username' => 'allobibi',
                'password' => '$2y$10$3uQrezTjib9DIr84PGiXZegRCzc7WjY1VWCo6QvFTkAjGakAZP9sK',
                'email' => 'allobibi@gmail.com',
                'created' => '2019-10-15 22:18:40',
                'modified' => '2019-10-15 22:18:40',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
