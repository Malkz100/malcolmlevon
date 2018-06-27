<?php namespace MalcolmLevon\Gigs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalcolmlevonGigsGig7 extends Migration
{
    public function up()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->decimal('price', 10, 0);
            $table->decimal('reduced_price', 10, 0)->nullable();
            $table->string('gig_slug')->change();
        });
    }
    
    public function down()
    {
        Schema::table('malcolmlevon_gigs_gig', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('reduced_price');
            $table->string('gig_slug', 191)->change();
        });
    }
}
