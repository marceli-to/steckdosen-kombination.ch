<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('duoi_products', function (Blueprint $table) {
            $table->id();
            $table->string('eldas_number')->nullable();
            $table->string('em_number')->nullable();
            $table->string('ean_number')->nullable();
            $table->string('number')->nullable();
            $table->json('title')->nullable();
            $table->string('gehaeuse')->nullable();
            $table->string('fabrikat')->nullable();
            $table->string('kategorie')->nullable();
            $table->string('beschreibung')->nullable();
            $table->string('volt')->nullable();
            $table->string('ampere')->nullable();
            $table->string('pole')->nullable();
            $table->string('schutzart')->nullable();
            $table->string('hilfskontakt')->nullable();
            $table->decimal('ek', 12, 2)->default(0.00);
            $table->decimal('uvp_egh', 12, 2)->default(0.00);
            $table->decimal('uvp_installateur', 12, 2)->default(0.00);
            $table->text('form_data')->nullable();
            $table->text('form_data_saesseli')->nullable();
            $table->string('ferratec_shop_url_de')->nullable();
            $table->string('ferratec_shop_url_fr')->nullable();
            $table->boolean('publish')->default(0);
            $table->boolean('has_image')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('duoi_products');
    }
};
