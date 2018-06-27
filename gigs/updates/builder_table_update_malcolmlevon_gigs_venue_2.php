<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsVenue2 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->string('venue_slug');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->dropColumn('venue_slug');
        });
    }
}
