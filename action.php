<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\PasswordGenerator;
use App\classes\Blog;
use App\classes\AllProduct;
use App\classes\allProductbySearch;

if(isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        include 'pages/home.php';
    }

    elseif ($_GET['pages'] == 'password-reset')
    {
        include 'pages/password-reset.php';
    }
    elseif ($_GET['pages'] == 'blog'){

        $blog = new Blog();
        $blogs = $blog->getAllBlogs();
        include 'pages/blog.php';
    }
    elseif ($_GET['pages'] == 'product'){

        $product = new AllProduct();
        $products = $product->getAllProducts();
        include 'pages/product.php';
    }
    elseif ($_GET['pages'] == 'AllProductbySearch.php'){

        $all_product = new allProductbySearch();
        $products = $product->get();
        include 'pages/product.php';
    }


}

elseif ($_POST['btn'])
{
 $passwordGenerator = new PasswordGenerator($_POST);
 $result = $passwordGenerator->newPassword();
 include 'pages/password-reset.php';
}



else{
    $home = new Home();
    $home->index();
}
