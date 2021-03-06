<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist2 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('artist_image');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->dropColumn('artist_image');
        });
    }
}
