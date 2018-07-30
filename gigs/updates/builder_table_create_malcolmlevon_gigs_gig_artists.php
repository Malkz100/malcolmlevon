<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMalcolmlevonGigsGigArtists extends Migration
{
    public function up()
    {
        Schema::create('malcolmlevon_gigs_gig_artists', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('gig_id')->unsigned();
            $table->integer('artist_id')->unsigned();
            $table->primary(['gig_id','artist_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('malcolmlevon_gigs_gig_artists');
    }
}
