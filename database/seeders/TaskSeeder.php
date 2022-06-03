<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'name' => '納豆',
                'content' => '業務スーパーで買う',
                'created_at' => '2022/06/04 11:11:11',
            ],
            [
                'id' => 2,
                'name' => '昆布つゆ',
                'content' => 'マルエツで特売',
                'created_at' => '2022/06/04 11:11:11',
            ],
            [
                'id' => 3,
                'name' => 'ビール',
                'content' => 'やまやが安い',
                'created_at' => '2022/06/04 11:11:11',
            ],
            [
                'id' => 4,
                'name' => 'ティッシュ',
                'content' => '2箱買う',
                'created_at' => '2022/06/04 11:11:11',
            ],
            [
                'id' => 5,
                'name' => 'チョコレート',
                'content' => 'マイカイさんの板チョコ',
                'created_at' => '2022/06/04 11:11:11',
            ]
        ]);
    }
}
