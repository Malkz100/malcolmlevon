<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsVenue extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->increments('venue_id')->unsigned(false)->change();
            $table->string('venue_name')->change();
            $table->string('venue_address1')->change();
            $table->string('venue_address2')->change();
            $table->string('venue_postcode')->change();
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->increments('venue_id')->unsigned()->change();
            $table->string('venue_name', 50)->change();
            $table->string('venue_address1', 50)->change();
            $table->string('venue_address2', 50)->change();
            $table->string('venue_postcode', 15)->change();
        });
    }
}
