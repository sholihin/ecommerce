<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_code');
            $table->string('product_code');
            $table->string('product_name');
            $table->string('customer_id');
            $table->decimal('price', 19,2);
            $table->integer('qty');
            $table->decimal('subtotal', 19,2);
            $table->timestamps();
        });

        // Schema::table('detail_orders', function($table) {
        //     $table->foreign('invoice_code')
        //       ->references('invoice')
        //       ->on('t_orders')
        //       ->onDelete('cascade');
        //     $table->foreign('product_code')
        //       ->references('product_code')
        //       ->on('m_product')
        //       ->onDelete('cascade');
        //     $table->foreign('customer_id')
        //       ->references('id')
        //       ->on('users')
        //       ->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detail_orders');
    }
}
