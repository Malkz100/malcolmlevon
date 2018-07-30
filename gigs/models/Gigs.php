<?php namespace MalcolmLevon\Gigs\Models;

use Model;
use \MalcolmLevon\Gigs\Models\Artist;
use \MalcolmLevon\Gigs\Models\Venue;

/**
 * Model
 */
class Gigs extends Model
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
    public $table = 'malcolmlevon_gigs_gig';

	/**
	 * @var array for artists list in create gig form
	 */
    //                    protected $jsonable = ['artists'];

	/**
	 * @return array for drop down list in gigs form
	 */
//	public function getArtistIdOptions()
//	{
//		$fields =  Artist::lists('artist_name','id');
//		return $fields;
//	}

	/**
	 * @return array
	 */
	public function getVenueIdOptions()
	{
		$fields =  Venue::lists('venue_name','id');
		return $fields;
	}

	public $belongsTo = [
		'venue' =>['malcolmlevon\Gigs\Models\Venue']
//		'artist' =>['malcolmlevon\Gigs\Models\Artist']
	];

	public $belongsToMany = [
		'artists' =>[
			'MalcolmLevon\Gigs\Models\Artist',
			'table' => 'malcolmlevon_gigs_gig_artists',
			//'order' => 'artist_name',
			'key' => 'artist_id',
			'otherKey' => 'gig_id'
		]
	];

}
