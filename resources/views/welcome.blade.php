@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="home_page-contiener">
  <div>
  <div class="achtergrond_home"></div>
  <img src="{{ asset('../image/stekjesdelen.png') }}" alt="homepage_img">
  
  </div>
<div class="home_page_text">
  <h1>Meer over Buurtcampus</h1>
  <p>In Buurtcampus Oost zoeken studenten samen met bewoners, professionals,
     ondernemers, docenten en onderzoekers gezamenlijk naar oplossingen voor kansrijke uitdagingen uit de buurt.</p>
     <a href="/aanmelden" class="Home-aanmelden_knop">Aanmelden</a>
</div>
</div>

@stop

