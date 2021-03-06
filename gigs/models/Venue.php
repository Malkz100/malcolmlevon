<?php namespace MalcolmLevon\Gigs\Models;

use Model;

/**
 * Model
 */
class Venue extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

	use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'malcolmlevon_gigs_venue';


	public $hasMany = [
		'gigs' =>['malcolmlevon\Gigs\Models\Gigs']
	];


}
