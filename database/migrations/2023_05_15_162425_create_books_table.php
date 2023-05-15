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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gender_id')
            ->constrained('genders')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');
            $table->string('name');
            $table->string('author');
            $table->string('registration_number');
            $table->boolean('situation')->nullable()->default(0);        
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

        Schema::table('books',  function(Blueprint $table){
            $table->dropForeign('books_gender_id_foreign');
            $table->dropColumn('gender_id');
        });

        Schema::dropIfExists('books');
    }
};
