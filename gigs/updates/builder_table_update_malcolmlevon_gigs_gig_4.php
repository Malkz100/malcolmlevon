<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig4 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->string('gig_title')->change();
            $table->integer('artist_id')->unsigned()->change();
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->string('gig_title', 191)->change();
            $table->integer('artist_id')->unsigned(false)->change();
        });
    }
}
