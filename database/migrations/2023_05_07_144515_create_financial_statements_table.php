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
        // Schema::create('financial_statements', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('id_pemasukan');
        //     $table->foreign('id_pemasukan')->references('id')->on('incomes');
        //     $table->unsignedBigInteger('id_pengeluaran');
        //     $table->foreign('id_pengeluaran')->references('id')->on('expenditures');
        //     $table->unsignedBigInteger('id_hutang');
        //     $table->foreign('id_hutang')->references('id')->on('debts');
        //     $table->date('Tanggal_Laporan');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('financial_statements');
    }
};
