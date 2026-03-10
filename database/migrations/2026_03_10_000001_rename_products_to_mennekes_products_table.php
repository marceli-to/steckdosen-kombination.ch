<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::rename('products', 'mennekes_products');
    }

    public function down()
    {
        Schema::rename('mennekes_products', 'products');
    }
};
