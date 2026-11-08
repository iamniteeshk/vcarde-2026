<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('wp_store_templates', function (Blueprint $table) {
            Artisan::call('db:seed', ['--class' => 'WhatsAppStoreTemplatesSeeder', '--force' => true]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wp_store_templates', function (Blueprint $table) {
            //
        });
    }
};
