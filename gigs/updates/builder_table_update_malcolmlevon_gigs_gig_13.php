<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig13 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->integer('sort_order')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
