<?php namespace MalcolmLevon\Gigs\Models;

use Model;
use \MalcolmLevon\gigs\models\Artist;
use \MalcolmLevon\gigs\models\Venue;

/**
 * Model
 */
class Gigs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'malcolmlevon_gigs_gig';

	/**
	 * @return array
	 */
	public function getArtistIdOptions()
	{
		$fields =  Artist::lists('artist_name','id');
		return $fields;
	}

	/**
	 * @return array
	 */
	public function getVenueIdOptions()
	{
		$fields =  Venue::lists('venue_name','id');
		return $fields;
	}

	public $belongsTo = [
		'venue' =>['malcolmlevon\Gigs\Models\Venue'],
		'artist' =>['malcolmlevon\Gigs\Models\Artist']
	];

//	public $hasMany = [
//		'artist' =>['malcolmlevon\Gigs\Models\Artist']
//	];

}
