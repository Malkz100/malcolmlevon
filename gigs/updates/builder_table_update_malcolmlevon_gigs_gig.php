<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig extends Migration
{
    public function up()
    {
        Schema::rename('malcolmlevon_gigs_', 'malcolmlevon_gigs_gig');
    }
    
    public function down()
    {
        Schema::rename('malcolmlevon_gigs_gig', 'malcolmlevon_gigs_');
    }
}
