<?php namespace VershininSpace\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVershininspaceFaqCategories extends Migration
{
    public function up()
    {
        Schema::create('vershininspace_faq_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 250);
            $table->string('slug', 250);
            $table->integer('sort_order')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vershininspace_faq_categories');
    }
}
