<?php namespace VershininSpace\Faq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVershininspaceFaqQuestions extends Migration
{
    public function up()
    {
        Schema::table('vershininspace_faq_questions', function($table)
        {
            $table->integer('category_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('vershininspace_faq_questions', function($table)
        {
            $table->integer('category_id')->nullable(false)->change();
        });
    }
}
