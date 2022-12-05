<?php

$_DATA = json_decode(file_get_contents('php://input'), true);



$cat = $_DATA['category'];


getProyecto($cat);


function getProyecto($category){

    $categories = [

        'categorias' => [
    
            'branding' => [
                'cla',
                'acuario',
                'sindicato',
                'apromsa',
            ],
    
            'fotografia' => [
                'cla',
                'acuario',
                'sindicato',
                'apromsa',
                'blackwolf',
                'aw'
            ],
    
            'video' => [
                'cla',
                'acuario',
                'sindicato',
                'apromsa',
                'blackwolf',
                'aw'
            ],
    
            'diseño grafico' => [
                'cla',
                'acuario',
                'sindicato',
                'tutti',
                'apromsa',
                'blackwolf',
                'aw'
            ],
    
            'mkt' => [
    
            ],
    
            'social media' => [
                'cla',
                'acuario',
                'sindicato',
                'apromsa',
                'blackwolf',
                'aw'
                
            ]
    
    
        ]
    
    ];

    foreach($categories as $cat => $cliente){
        echo json_encode([
            'categorias' => $cliente[$category]
        ], true);
    }

}