<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig6 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->string('gig_slug');
            $table->dropColumn('price');
            $table->dropColumn('reduced_price');
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->dropColumn('gig_slug');
            $table->decimal('price', 10, 0);
            $table->decimal('reduced_price', 10, 0);
        });
    }
}
