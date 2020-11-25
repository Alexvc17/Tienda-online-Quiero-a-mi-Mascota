<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perros extends Controller
{

    public function perros(){
        
        $item1 = [
   
           'Codigo: 111',
           'Precio: 14000'
           
   
   
        ];
   
        $item2 = [
   
            'Codigo: 222',
            'Precio: 11000'
        ];

        $item3 = [
   
            'Codigo: 333',
           'Precio: 22000'
    
    
         ];
    
         $item4 = [
    
            'Codigo: 444',
           'Precio: 12000'
         ];

         $item5 = [
   
            'Codigo: 555',
           'Precio: 34000'
    
    
         ];
    
         $item6 = [
    
            'Codigo: 777',
           'Precio: 9000'
         ];
   
   
   
   
        

   
        return view('perros', [
   
           
        'item1' => $item1,
        'item2' => $item2,
        'item3' => $item3,
        'item4' => $item4,
        'item5' => $item5,
        'item6' => $item6
        
        
        
        
       ]);
                  
       }
}
