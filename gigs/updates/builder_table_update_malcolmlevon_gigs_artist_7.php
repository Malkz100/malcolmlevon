<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist7 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->renameColumn('artist_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->renameColumn('id', 'artist_id');
        });
    }
}
