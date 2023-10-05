<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "judul" => "One Piece",
            "slug" => "one-piece",
            "pengarang" => "Eichiro Oda",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam sed incidunt itaque eos maiores et adipisci odio dignissimos a, vero nobis exercitationem facilis dolore labore deleniti non, cupiditate dolor, dolorem suscipit rem quidem! Quos in quaerat distinctio eveniet totam"
        ],
        [
            "judul" => "Anak Ngen",
            "slug" => "anak-ngen",
            "pengarang" => "AleAlien",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae magnam sed incidunt itaque eos maiores et adipisci odio dignissimos a, vero nobis exercitationem facilis dolore labore deleniti non, cupiditate dolor, dolorem suscipit rem quidem! Quos in quaerat distinctio eveniet totam"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        //ini kenapa kok static::all ? karena static itu di gunakan untuk mengambil dari method static nya
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}