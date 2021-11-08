<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'records', function( Blueprint $table )
        {
            $table->id();
            $table->string( 'stock_id' )->index();
            $table->integer( 'open' );
            $table->integer( 'high' );
            $table->integer( 'low' );
            $table->integer( 'close' );
            $table->date( 'date' )->index();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'records' );
    }
}
