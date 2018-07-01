<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsArtist11 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('website')->nullable()->change();
            $table->string('soundcloud')->nullable()->change();
            $table->string('instagram')->nullable()->change();
            $table->string('facebook')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_artist', function($table)
        {
            $table->string('website', 191)->nullable(false)->change();
            $table->string('soundcloud', 191)->nullable(false)->change();
            $table->string('instagram', 191)->nullable(false)->change();
            $table->string('facebook', 191)->nullable(false)->change();
        });
    }
}
