<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusAndVisibilityIdToPostsTable extends Migration {

    public function up()
    {
        Schema::table('blog_posts', function(Blueprint $table) {
            $table->integer('status_id')->after('category_id');
            $table->integer('visibility_id')->after('category_id');
        });
    }

    public function down()
    {
        Schema::table('blog_questions', function(Blueprint $table)
        {
            $table->dropColumn('status_id');
            $table->dropColumn('visibility_id');
        });
    }
}