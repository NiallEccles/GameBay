@extends('layouts.app')

@section('slideshow')

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
                <div class="slide slide<?php echo $i; ?>" style="background:url(<?php echo $image; ?>); background:position:center center; background-repeat:no-repeat; background-size:cover;">
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

@endsection