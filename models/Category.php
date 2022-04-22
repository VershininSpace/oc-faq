<?php namespace VershininSpace\Faq\Models;

use Model;
use VershininSpace\Faq\Models\Question;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vershininspace_faq_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title'    => 'required',
    ];

    public $hasMany = [
        'questions' => Question::class
    ];
}
