<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigs extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_', function($table)
        {
            $table->integer('venue_id')->unsigned();
            $table->integer('artist_id');
            $table->dropColumn('venue_name');
            $table->dropColumn('venue_address1');
            $table->dropColumn('venue_address2');
            $table->dropColumn('venue_postcode');
            $table->dropColumn('artist_title');
            $table->dropColumn('artist_description');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_', function($table)
        {
            $table->dropColumn('venue_id');
            $table->dropColumn('artist_id');
            $table->string('venue_name', 50);
            $table->string('venue_address1', 50);
            $table->string('venue_address2', 50)->nullable();
            $table->string('venue_postcode', 15)->nullable();
            $table->string('artist_title', 50);
            $table->text('artist_description');
        });
    }
}
