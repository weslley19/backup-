<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->dateTime('due_date');
            $table->string('description');
            $table->boolean('completed')->default(false);
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('cascade');
            $table->foreignIdFor(Category::class)->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks' , function(Blueprint $table){
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Category::class);
        });
        Schema::dropIfExists('tasks');
    }
};
