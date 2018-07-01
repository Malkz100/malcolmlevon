<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist10 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('website');
            $table->string('soundcloud');
            $table->string('instagram');
            $table->string('facebook');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->dropColumn('website');
            $table->dropColumn('soundcloud');
            $table->dropColumn('instagram');
            $table->dropColumn('facebook');
        });
    }
}
