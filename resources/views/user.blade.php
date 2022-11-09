@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div class="user_page">
    <div class="user_page-info">
    <img src="{{ asset('image/user_img.png') }}" alt="user" style="width: 20%;"><br>
      <em>Jone Dou</em>
      <p>jonedou@gmail.com</p>
      <p>0682344561</p>
      <em><a href="#">wachtwoord vercheten?</a></em>
    </div>
    <div class="user_page-posten">
    <div class="user_post">
        <h4>Van klein kastje tot buffetkast</h4>
        <p>Het principe van stekjesruil is simpel. “Je plaatst een kast of rek voor je huis en geeft de kast een naam”, 
            legt Marjolijn uit. “Mijn kast heet The Greenhouse. Het kan van alles zijn: van een klein kastje tot een grote buffetkast. </p>
    </div>
    <div class="user_image">
    <img src="{{ asset('image/Philodendron.jpeg') }}" alt="user post img">
    </div>
    </div>
</div>
@stop