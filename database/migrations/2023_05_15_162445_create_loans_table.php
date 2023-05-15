<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained('users')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
            $table->foreignId('book_id')
            ->constrained('books')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
            $table->date('return_date');
            $table->boolean('late')->nullable()->default(0);
            $table->boolean('returned')->nullable()->default(0);
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
        Schema::table('loans',  function(Blueprint $table){
            $table->dropForeign('loans_user_id_foreign');
            $table->dropColumn('user_id');
            $table->dropForeign('loans_book_id_foreign');
            $table->dropColumn('book_id');
        });

        Schema::dropIfExists('loans');
    }
};
