<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('images', function (Blueprint $table) {
            if (!Schema::hasColumn('images', 'labels')) {
                $table->text('labels')->nullable();
            }
            if (!Schema::hasColumn('images', 'adult')) {
                $table->string('adult')->nullable();
            }
            if (!Schema::hasColumn('images', 'spoof')) {
                $table->string('spoof')->nullable();
            }
            if (!Schema::hasColumn('images', 'medical')) {
                $table->string('medical')->nullable();
            }
            if (!Schema::hasColumn('images', 'violence')) {
                $table->string('violence')->nullable();
            }
            if (!Schema::hasColumn('images', 'racy')) {
                $table->string('racy')->nullable();
            }
        });
    }

    public function down(): void
    {
        Schema::table('images', function (Blueprint $table) {
            $columns = array_filter(
                ['labels', 'adult', 'spoof', 'medical', 'violence', 'racy'],
                fn ($col) => Schema::hasColumn('images', $col)
            );

            if (!empty($columns)) {
                $table->dropColumn($columns);
            }
        });
    }
};