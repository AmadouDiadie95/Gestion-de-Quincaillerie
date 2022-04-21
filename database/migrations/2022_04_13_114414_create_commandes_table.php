<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('date') -> nullable() ;
            $table->string('supplier') -> nullable() ;
            $table->string('article_name') -> nullable() ;
            $table->double('article_price') ->default(0) ;
            $table->integer('quantity_choiced') ->default(0) ;
            $table->double('total_price') ->default(0) ;
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
        Schema::dropIfExists('commandes');
    }
}
