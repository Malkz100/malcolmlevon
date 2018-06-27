<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsVenue3 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->renameColumn('venue_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->renameColumn('id', 'venue_id');
        });
    }
}
