@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content') 
<div class="verzorgen_page">
<div class="verzorgen_page-img">
<div class="achtergrond_home"></div>
<img src="{{ asset('../image/stekje verzorgen.png') }}" alt="verzorg stekje">
</div>
<div class="verzorgen_page-info">
<h1>Meer over Buurtcampus</h1>
  <p>In Buurtcampus Oost zoeken studenten samen met bewoners, professionals,
     ondernemers, docenten en onderzoekers gezamenlijk naar oplossingen voor kansrijke uitdagingen uit de buurt.</p>
     <a href="/overzicht_page" class="Home-verzorgen_knop">Stekje ruilen?</a>
</div>
</div>
<div class="home_page-exinfo">
<div>
  <img src="{{ asset('../image/stekje1.svg') }}" alt="Stekje ruilen">
  <h3>Van klein kastje tot buffetkast</h3>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland</p>
    <a href="/overzicht_page" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
<div>
  <img src="{{ asset('../image/stekje2.svg') }}" alt="Stekje ruilen">
  <h3>Van klein kastje tot buffetkast</h3>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="/verzorgen_page" class="Home-knop_ruilen">Stekje verzorgen?</a>
</div>
<div>
  <img src="{{ asset('../image/stekje3.svg') }}" alt="Stekje ruilen">
  <h3>Van klein kastje tot buffetkast</h3>
  <p>je plaatst een kast in je tuin en je ruilt je plant (of stekje) voor een andere plant. 
    Stekjesruil wordt steeds populairder in Nederland </p>
    <a href="/overzicht_page" class="Home-knop_ruilen">Stekje ruilen?</a>
</div>
</div>
@stop