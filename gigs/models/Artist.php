<?php namespace MalcolmLevon\Gigs\Models;

use Model;

/**
 * Model
 */
class Artist extends Model
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
    public $table = 'malcolmlevon_gigs_artist';

    /**
	 *define a relationship to the System\Models\File class for photo upload
     */
	public $attachMany = [
		'featured_images' => ['System\Models\File', 'order' => 'sort_order'],
		'content_images' => ['System\Models\File']
	];

}
