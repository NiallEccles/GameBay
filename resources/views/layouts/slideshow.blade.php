@extends('layouts.app')

@section('slideshow')

<div class="slideshow">
    <div id="arrow-left" class="arrow"></div>
    <div id="slider">
        <div class="slide slide1">
            <div class="slide-content">
                <span>Image One</span>
            </div>
        </div>
        <div class="slide slide2">
            <div class="slide-content">
                <span>Image Two</span>
            </div>
        </div>
        <div class="slide slide3">
            <div class="slide-content">
                <span>Image Three</span>
            </div>
        </div>
    </div>
    <div id="arrow-right" class="arrow"></div>
</div>

@endsection