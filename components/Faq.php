<?php namespace VershininSpace\Faq\Components;

use Cms\Classes\ComponentBase;
use VershininSpace\Faq\Models\Category;

class Faq extends ComponentBase
{
    protected $categories;

    public function componentDetails()
    {
        return [
            'name'        => 'vershininspace.faq::lang.component.name',
            'description' => 'vershininspace.faq::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->categories = $this->listCategories();
    }

    public function listCategories()
    {
        return Category::all();
    }

    public function getCategories()
    {
        return $this->categories;
    }
}
