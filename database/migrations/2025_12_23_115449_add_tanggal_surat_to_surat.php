<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('surat', function (Blueprint $table) {
            if (!Schema::hasColumn('surat', 'tanggal_surat')) {
                $table->date('tanggal_surat')->nullable()->after('tanggal_selesai');
            }
        });
    }

    public function down(): void
    {
        Schema::table('surat', function (Blueprint $table) {
            if (Schema::hasColumn('surat', 'tanggal_surat')) {
                $table->dropColumn('tanggal_surat');
            }
        });
    }
};
