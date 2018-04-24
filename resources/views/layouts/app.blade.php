<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GameBay</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700i" rel="stylesheet">  
        <link href="{{ asset('css/grid.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >        
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div id="header-bar" class="container-fluid">
                <div class="menu">
                    <svg class="menu-icon" version="1.1" id="Layer_1" x="0px" y="0px"
                    viewBox="0 0 88.1 88.2" enable-background="new 0 0 88.1 88.2" xml:space="preserve">
                        <g id="XMLID_15_">
                        <line id="XMLID_18_" fill="none" stroke="#13A8FD" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="76.1" y1="12.6" x2="12.1" y2="12.6"/>
                        <line id="XMLID_17_" fill="none" stroke="#13A8FD" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="76.1" y1="44.1" x2="12.1" y2="44.1"/>
                        <line id="XMLID_16_" fill="none" stroke="#13A8FD" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="76.1" y1="75.6" x2="12.1" y2="75.6"/>
                        </g>
                    </svg>
                </div>
                <div class="title-bar">
                    <a href="/" class="title">GameBay</a>
                </div>
                <div class="profile">
                    <a href="#">Login</a>
                </div>            
            </div>
        </nav>
        <div class="slideshow">
            <div id="arrow-left" class="arrow"></div>
            <div id="slider">
                <?php
                    $slide_image = array(
                        "https://images.unsplash.com/photo-1499424271223-6e0ab6be9bd6?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=60c285849b19cec273f9212c1c039bee&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb", 
                        "https://images.unsplash.com/photo-1513708726622-aefa716650bb?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8662009f4c1407e8b39919d618a4fe7e&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb", 
                        "https://images.unsplash.com/photo-1509914398892-963f53e6e2f1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=dd093986e77ede3c4c6fcaba42fdf544&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb"
                    ); 
                    $i = 0;
                    foreach ($slide_image as $image) { 
                        $i++; 
                    ?>
                        <div class="slide slide<?php echo $i; ?>" style="color:red; background-image:url('<?php echo $image; ?>')">
                            <div class="slide-content">
                                <span>Image <?php echo $i; ?></span>
                            </div>
                        </div>
                    <?php 
                    }
                ?>
            </div>
            <div id="arrow-right" class="arrow"></div>
        </div>
        <div class="featured">
            <div class="panel">
                <?php 
                    $product_info = (object) [
                        'title' => 'Game 1',
                        'image' => 'https://images.unsplash.com/photo-1496072298559-ee7eacbd1b39?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f7187f42114410b39d3fb69541267b13&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb',
                        'price' => '€0.99'
                    ];
                ?>
                <div class="panel-image" style = "background:url('<?php echo $product_info->image; ?>')">
                </div>
                <div class="panel-info">
                    <p class="panel-title no-margin"><?php echo $product_info->title; ?></p>
                    <p class="panel-price no-margin"><?php echo $product_info->price; ?></p>
                </div>
            </div>
            <div class="panel">
                <?php 
                    $product_info = (object) [
                        'title' => 'Game 2',
                        'image' => 'https://images.unsplash.com/photo-1496072298559-ee7eacbd1b39?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=f7187f42114410b39d3fb69541267b13&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb',
                        'price' => '€0.99'
                    ];
                ?>
                <div class="panel-image" style = "background:url('<?php echo $product_info->image; ?>')">
                </div>
                <div class="panel-info">
                    <p class="panel-title no-margin"><?php echo $product_info->title; ?></p>
                    <p class="panel-price no-margin"><?php echo $product_info->price; ?></p>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
