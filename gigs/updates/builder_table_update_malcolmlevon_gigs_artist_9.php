<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist9 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->renameColumn('artist_title', 'artist_name');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->renameColumn('artist_name', 'artist_title');
        });
    }
}
