<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist12 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
