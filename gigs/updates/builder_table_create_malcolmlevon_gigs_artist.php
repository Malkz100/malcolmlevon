<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMalcolmlevonGigsArtist extends Migration
{
    public function up()
    {
        Schema::create('malcolmlevon_gigs_artist', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('artist_id');
            $table->string('artist_title', 50);
            $table->text('artist_description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('malcolmlevon_gigs_artist');
    }
}
