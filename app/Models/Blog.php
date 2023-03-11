<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected static function getAllBlogs(){
        return $blogs=[

            0=>[
               
                "id"=>1,
                "tilte"=>"Lorem ipsum dolor sit amet.",
                "desc"=>"This is descripton one",
                "blog-img"=>"images/card-1.jpg"
            ],
            1=>[
                "id"=>2,
                "tilte"=>"Lorem ipsum dolor sit amet.",
                "desc"=>"This is descripton two",
                "blog-img"=>"images/card-2.png"
            ],
            2=>[
                "id"=>3,
                "tilte"=>"Lorem ipsum dolor sit amet.",
                "desc"=>"This is descripton Three",
                "blog-img"=>"images/card-3.jpg"
            ],
            3=>[
                "id"=>4,
                "tilte"=>"Lorem ipsum dolor sit amet.",
                "desc"=>"This is descripton four",
                "blog-img"=>"images/card-1.jpg"
            ],

        ];
    }
}
