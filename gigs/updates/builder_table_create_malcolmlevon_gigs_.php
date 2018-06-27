<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMalcolmlevonGigs extends Migration
{
    public function up()
    {
        Schema::create('malcolmlevon_gigs_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('gig_id')->unsigned();
            $table->dateTime('gig_date_time');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('venue_name', 50);
            $table->string('venue_address1', 50);
            $table->string('venue_address2', 50)->nullable();
            $table->string('venue_postcode', 15)->nullable();
            $table->timestamp('published_at');
            $table->string('artist_title', 50);
            $table->text('artist_description');
            $table->string('gig_title', 50);
            $table->text('gig_description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('malcolmlevon_gigs_');
    }
}
