<?php

namespace Modules\Video\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Models\Video;

class VideoDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Videos Seed
         * ------------------
         */

        // DB::table('videos')->truncate();
        // echo "Truncate: videos \n";

        Video::factory()->count(20)->create();
        $rows = Video::all();
        echo " Insert: videos \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
