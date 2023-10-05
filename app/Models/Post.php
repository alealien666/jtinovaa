<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $table = 'pitiks';
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class); //ini itu buat nge relasikan table. ingat ini ngambil dari models lo ya

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

// pokok lek belongsTo iku relasi one to one
// lek hasMany iku relasi one to many
// lek ng laravel iku menerapkan kebalikane relasine kui maeng, misal tabel iki iki kan tabel pitiks/postingan iku relasi ng tabel kategori
// kan setiap pitiks/postingan iku duwe 1 kategori kan dadi one to one gae belongsTo. nah kebalikane iku setiap kategori iku bisa memiliki banyak pitiks/postingan
// mangkane one to many dadi gae hasMany