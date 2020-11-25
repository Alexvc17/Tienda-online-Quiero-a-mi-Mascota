<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gatos extends Controller
{
    
    public function gatos(){
        
        $item1 = [
   
           'Codigo: 001',
           'Precio: 11000'
           
   
   
        ];
   
        $item2 = [
   
            'Codigo: 002',
            'Precio: 19000'
        ];

        $item3 = [
   
            'Codigo: 003',
           'Precio: 14500'
    
    
         ];
    
         $item4 = [
    
            'Codigo: 004',
           'Precio: 22100'
         ];

         $item5 = [
   
            'Codigo: 005',
           'Precio: 25000'
    
    
         ];
    
         $item6 = [
    
            'Codigo: 006',
           'Precio: 11000'
         ];
   
   
   
   
        

   
        return view('gatos', [
   
           
         
        'item1' => $item1,
        'item2' => $item2,
        'item3' => $item3,
        'item4' => $item4,
        'item5' => $item5,
        'item6' => $item6
        
        
        
        
       ]);
                  
       }





}
