<?php
namespace App\classes;
class AllProduct
{
    protected $products;


    public function getAllProducts()
    {
        return [
            0=>[
                'id'            =>  '01',
                'title'         =>  'T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's1.png'
            ],
            1=>[
                'id'            =>  '02',
                'title'         =>  'T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's2.png'
            ],
            2=>[
                'id'            =>  '03',
                'title'         =>  'T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's3.png'
            ],
            3=>[
                'id'            =>  '04',
                'title'         =>  'T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's4.png'
            ],
            4=>[
                'id'            =>  '05',
                'title'         =>  'Blue Dress Shirt ',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'Shirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's5.png'
            ],
            5=>[
                'id'            =>  '06',
                'title'         =>  'Dress Shirt Picture',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'Shirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's6.png'
            ],
            6=>[
                'id'            =>  '07',
                'title'         =>  'Black Dress Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'Shirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's7.png'
            ],
            7=>[
                'id'            =>  '08',
                'title'         =>  'White Dress Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'Shirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's8.png'
            ],
            8=>[
                'id'            =>  '09',
                'title'         =>  'Blue Dress Shirt ',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'Shirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's9.png'
            ],
            9=>[
                'id'            =>  '10',
                'title'         =>  'Dress Shirt Picture',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'Shirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's10.png'
            ],



        ];
    }

    public function getAllProductBySearchText(){
        $this->products  = $this->getAllProducts();
        foreach ($this->products as $product){
            if ($this->text == $product['name']){
                $this->result = $products;
                break;
            }

        }
        return $this->result;

    }

}