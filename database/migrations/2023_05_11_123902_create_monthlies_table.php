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
        Schema::create('monthlies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemasukan');
            $table->foreign('id_pemasukan')->references('id')->on('incomes')->on('incomes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_pengeluaran');
            $table->foreign('id_pengeluaran')->references('id')->on('expenditures')->on('incomes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_hutang');
            $table->foreign('id_hutang')->references('id')->on('debts')->on('incomes')->onDelete('cascade')->onUpdate('cascade');
            $table->date('Tanggal_Laporan');
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
        Schema::dropIfExists('monthlies');
        Schema::table('monthlies', function (Blueprint $table) {
            $table->dropColumn('id_pemasukan');
            $table->dropColumn('id_pengeluaran');
            $table->dropColumn('id_hutang');
        });
    }
};
