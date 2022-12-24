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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('invoice_fk')->unsigned()->nullable();
            $table->float('price');
            $table->text('details');
            $table->foreign('invoice_fk')->references('checkIn_id')->on('check_ins');
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
        Schema::dropIfExists('invoices');
        $table->dropForeign('invoice_fk');
        
    
        
    }
};
