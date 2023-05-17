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
        Schema::create('financial_statements', function (Blueprint $table) {
            $table->id('id_financial_statement');
            $table->decimal('total_pemasukan', 10, 2);
            $table->decimal('total_pengeluaran', 10, 2);
            $table->decimal('total_hutang', 10, 2);
            $table->decimal('laba', 10, 2);
            $table->date('tanggal_laporan');
            $table->string('id_company');
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
        // Schema::dropIfExists('financial_statements');
    }
};
