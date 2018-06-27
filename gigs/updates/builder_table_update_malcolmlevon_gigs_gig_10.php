<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig10 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->renameColumn('gig_id', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->renameColumn('id', 'gig_id');
        });
    }
}
