<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist8 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('slug', 191)->nullable();
            $table->dropColumn('artist_slug');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->dropColumn('slug');
            $table->string('artist_slug', 191);
        });
    }
}
