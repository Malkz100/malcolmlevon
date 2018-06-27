<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig9 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->dropColumn('artist_phone');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->string('artist_phone', 15)->nullable();
        });
    }
}
