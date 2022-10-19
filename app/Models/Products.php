<?php

namespace App\Models;

class Products{
  public static function getProducts(){
  return [
    [
      'productId'=> '1',
      'productDiscount'=> '20% OFF',
      'productPrice'=> '10,000',
      'productName'=> 'LeFlop James basketball shoes',
      'soldItems'=> '10',
      'productDescription'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non enim alias nisi neque incidunt quo quas dolores, maxime ullam distinctio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, incidunt. Ullam, cumque ratione. Assumenda, recusandae officia. Officia hic possimus vitae? ',
      'productImage'=> 'https://media.gq.com/photos/5d8395f45cc5df00099c2aa1/master/pass/NikeNews_HO19_BB_LeBron17_FutureAir_Hero_V3_original.jpg',
      'sellerLocation'=> 'San Pablo, Laguna'
    ],
    [
      'productId'=> '2',
      'productDiscount'=> '30% OFF',
      'productPrice'=> '8,999',
      'productName'=> 'LeBrick James basketball shoes',
      'soldItems'=> '8.25',
      'productDescription'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non enim alias nisi neque incidunt quo quas dolores, maxime ullam distinctio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, incidunt. Ullam, cumque ratione. Assumenda, recusandae officia. Officia hic possimus vitae? ',
      'productImage'=> 'https://www.si.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cfl_progressive%2Cq_auto:good%2Cw_1200/MTY4MTk2NjU0NDM2MTMyNzY1/lebron-james-12-a.jpg',
      'sellerLocation'=> 'Makati City'
    ],
    [
      'productId'=> '3',
      'productDiscount'=> '30% OFF',
      'productPrice'=> '9,500',
      'productName'=> 'LeCoach James basketball shoes',
      'soldItems'=> '3.3',
      'productDescription'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non enim alias nisi neque incidunt quo quas dolores, maxime ullam distinctio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, incidunt. Ullam, cumque ratione. Assumenda, recusandae officia. Officia hic possimus vitae? ',
      'productImage'=> 'https://cdn.shopify.com/s/files/1/0603/3031/1875/products/main-square_76145218-8773-4899-9399-5dffeb3d155d_759x.jpg?v=1656292504',
      'sellerLocation'=> 'Parañaque City'
    ],
    [
      'productId'=> '4',
      'productDiscount'=> '30% OFF',
      'productPrice'=> '9,500',
      'productName'=> 'LeCoach James basketball shoes',
      'soldItems'=> '3.3',
      'productDescription'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non enim alias nisi neque incidunt quo quas dolores, maxime ullam distinctio? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, incidunt. Ullam, cumque ratione. Assumenda, recusandae officia. Officia hic possimus vitae? ',
      'productImage'=> 'https://cdn.shopify.com/s/files/1/0603/3031/1875/products/main-square_76145218-8773-4899-9399-5dffeb3d155d_759x.jpg?v=1656292504',
      'sellerLocation'=> 'Parañaque City'
    ]
  ];
}

public static function getProduct($productId){
  $Products = self::getProducts();
  foreach($Products as $product){
      if($product['productId'] === $productId){
          return $product;
      }
    }
  }
}

?>