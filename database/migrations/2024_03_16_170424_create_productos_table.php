<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idCategoria')->unsigned();
            $table->string('cNomProduc', 50);
            $table->string('cCompoPro')->nullable();
            $table->date('dFecVenPro');
            $table->string('cDescriPro')->nullable();
            $table->decimal('nPreVenPro', 14, 4);
            $table->integer('nStockProd');
            $table->boolean('lCondicPro')->default(1);
            $table->timestamps();

            $table->foreign('idCategoria')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
