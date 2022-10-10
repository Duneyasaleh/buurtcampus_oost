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
<div class="home_page-exinfo">
<div>
  <img src="{{ asset('../image/stekjes_ruilen.png') }}" alt="Stekje ruilen">
  <h3>Van klein kastje tot buffetkast</h3>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland</p>
    <a href="/overzicht_page" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
<div>
  <img src="{{ asset('../image/stekjes_ruilen.png') }}" alt="Stekje ruilen">
  <h3>Van klein kastje tot buffetkast</h3>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="/verzorgen_page" class="Home-knop_ruilen">Stekje verzorgen?</a>
</div>
<div>
  <img src="{{ asset('../image/stekjes_ruilen.png') }}" alt="Stekje ruilen">
  <h3>Van klein kastje tot buffetkast</h3>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="/overzicht_page" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
</div>

@stop

