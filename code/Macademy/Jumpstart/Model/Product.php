<?php

declare(strict_types=1);

namespace Macademy\Jumpstart\Model;

class Product{
    private Category $category;

    function __construct(Category $category){
        $this->category = $category;
    }

    function getCategoryName(){
        return $this->category->getName();
    }
}

?>