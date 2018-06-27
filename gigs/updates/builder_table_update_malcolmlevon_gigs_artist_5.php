<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist5 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('artist_slug')->change();
            $table->string('artist_image')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('artist_slug', 191)->change();
            $table->string('artist_image', 191)->nullable(false)->change();
        });
    }
}
