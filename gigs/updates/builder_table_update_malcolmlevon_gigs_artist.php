<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->increments('artist_id')->unsigned(false)->change();
            $table->string('artist_title')->change();
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->increments('artist_id')->unsigned()->change();
            $table->string('artist_title', 50)->change();
        });
    }
}
