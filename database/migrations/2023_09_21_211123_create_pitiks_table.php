<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePitiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            //ini nama foreign key nya itu nama depannya sebelum_id itu harus sama dengan nama models nya. btw ini nama modelsnya Category makanya gw tulis category_id. jadi ketika gw cek di terminal menggunakan tinker, misal $post = Post::first(); itu akan keluar postingan pertama nah setelah itu gw tulis $post->category(btw category itu nama method di model Post gw) itu akan keluar data kategori yang bersangkutan dengan post yang id nya 1 soalnyaa gw di sini kan manggilnya yang first
            $table->foreignId('user_id');
            $table->string('judul');
            $table->string('excerpt');
            $table->string('slug')->unique();
            $table->text('isi');
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
        Schema::dropIfExists('pitiks');
    }
}