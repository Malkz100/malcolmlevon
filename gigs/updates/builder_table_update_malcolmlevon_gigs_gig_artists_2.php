<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGigArtists2 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig_artists', function($table)
        {
            $table->dropPrimary(['gigs_id','artist_id']);
            $table->renameColumn('gigs_id', 'gig_id');
            $table->primary(['gig_id','artist_id']);
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig_artists', function($table)
        {
            $table->dropPrimary(['gig_id','artist_id']);
            $table->renameColumn('gig_id', 'gigs_id');
            $table->primary(['gigs_id','artist_id']);
        });
    }
}
