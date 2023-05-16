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
        Schema::table('loans', function (Blueprint $table){
            $table->dropColumn('late');
            $table->dropColumn('returned');
            $table->date('loan_date')->after('book_id');
            $table->enum('situation', ['EMPRESTADO', 'DEVOLVIDO', 'ATRASADO'])
            ->nullable()->default('EMPRESTADO')->after('return_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loans', function (Blueprint $table){
            $table->boolean('late')->nullable()->default(0);
            $table->boolean('returned')->nullable()->default(0);
            $table->dropColumn('loan_date');
            $table->dropColumn('situation');
        });
    }
};
