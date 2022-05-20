<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('cee_63a_5p')->nullable()->default(0);
            $table->tinyInteger('cee_32a_5p')->nullable()->default(0);
            $table->tinyInteger('cee_16a_5p')->nullable()->default(0);
            $table->tinyInteger('ch_16a_t25')->nullable()->default(0);
            $table->tinyInteger('cee_16a_3p')->nullable()->default(0);
            $table->tinyInteger('ch_16a_t23')->nullable()->default(0);
            $table->tinyInteger('data_ports')->nullable()->default(0);
            $table->tinyInteger('fi_switch')->nullable()->default(0);
            $table->tinyInteger('fi_ls')->nullable()->default(0);
            $table->tinyInteger('schuko')->nullable()->default(0);
            $table->tinyInteger('ch_10a_t13')->nullable()->default(0);
            $table->string('fabrikat')->nullable();
            $table->string('40a_63a')->nullable();
            $table->string('fabrikat_absicherung')->nullable();
            $table->string('schutzart')->nullable();
            $table->string('anschluss')->nullable();
            $table->string('gehaeuse')->nullable();
            $table->string('number')->nullable();
            $table->string('kategorie')->nullable();
            $table->string('beschreibung')->nullable();
            $table->decimal('ek', 12, 2)->default(0.00);
            $table->decimal('uvp_egh', 12, 2)->default(0.00);
            $table->decimal('uvp_installateur', 12, 2)->default(0.00);
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
        Schema::dropIfExists('products');
    }
}
