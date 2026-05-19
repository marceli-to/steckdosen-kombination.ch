<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('mennekes_products', function (Blueprint $table) {
            $table->dropColumn(['cee_63a', 'cee_125a']);
        });
    }

    public function down()
    {
        Schema::table('mennekes_products', function (Blueprint $table) {
            $table->tinyInteger('cee_63a')->nullable()->default(0)->after('cee_63a_5p');
            $table->tinyInteger('cee_125a')->nullable()->default(0)->after('cee_63a');
        });
    }
};
