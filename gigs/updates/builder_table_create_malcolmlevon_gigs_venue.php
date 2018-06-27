<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMalcolmlevonGigsVenue extends Migration
{
    public function up()
    {
        Schema::create('malcolmlevon_gigs_venue', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('venue_id');
            $table->string('venue_name', 50);
            $table->string('venue_address1', 50);
            $table->string('venue_address2', 50)->nullable();
            $table->string('venue_postcode', 15);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('malcolmlevon_gigs_venue');
    }
}
