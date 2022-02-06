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
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'author'        =>  'Sohel',
                'image'         =>  '1.jpg'
            ],
            1=>[
                'title'         =>  'A new blog two',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'author'        =>  'Munna',
                'image'         =>  '2.jpg'
            ],

        ];
    }

}