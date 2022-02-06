<?php
namespace App\classes;
class Blog
{
    protected $blogs;


    public function getAllBlogs()
    {
        return [
            0=>[
                'title'         =>  'A new blog one',
                'description'   =>  'Blog Description',
                'author'        =>  'Sohel',
                'image'         =>  '1.jpg'
            ],
            1=>[
                'title'         =>  'A new blog two',
                'description'   =>  'Blog Description',
                'author'        =>  'Munna',
                'image'         =>  '2.jpg'
            ],

        ];
    }

}