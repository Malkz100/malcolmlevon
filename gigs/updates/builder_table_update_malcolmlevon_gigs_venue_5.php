<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsVenue5 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->string('town_city');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_venue', function($table)
        {
            $table->dropColumn('town_city');
        });
    }
}
