<?php namespace VershininSpace\Faq\Models;

use Model;
use VershininSpace\Faq\Models\Category;

/**
 * Model
 */
class Question extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'vershininspace_faq_questions';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title'       => 'required',
        'description' => 'required'
    ];

    public $belongsTo = [
        'category' => Category::class
    ];
}
