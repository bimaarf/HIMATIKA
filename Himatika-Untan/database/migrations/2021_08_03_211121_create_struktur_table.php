<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStrukturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur', function (Blueprint $table) {
            $table->id();
            $table->string('cover_img', 255);
            $table->string('Visi', 255);
            $table->string('Misi_a', 255);
            $table->string('Misi_b', 255);
            $table->string('Misi_c', 255);
            $table->string('Misi_d', 255);
            $table->string('Misi_e', 255);
            $table->string('ketua', 255);
            $table->string('sekretaris', 255);
            $table->string('bendahara', 255);
            $table->string('k_keset', 255);
            $table->text('s_keset');
            $table->string('k_kewi', 255);
            $table->text('s_kewi');
            $table->string('k_psdm', 255);
            $table->text('s_psdm');
            $table->string('k_aka', 255);
            $table->text('s_aka');
            $table->string('k_humas', 255);
            $table->text('s_humas');
            $table->string('k_seni', 255);
            $table->text('s_seni');
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
        Schema::dropIfExists('struktur');
    }
}
