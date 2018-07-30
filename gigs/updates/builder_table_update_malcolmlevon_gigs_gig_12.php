<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig12 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->dropColumn('artist_id');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->integer('artist_id')->unsigned();
        });
    }
}
