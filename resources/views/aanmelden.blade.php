@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<section class="aanmelden_page">
<div class="registreren_form">
  <h1>Inloggen</h1>
  <form method="POST" action="<?php echo url("verzorgen_page")?>"> 
    <div>
        <label for="lname">E-mail:</label>
        <input type="email" id="mail" name="mail" aria-label="vul je mail hier om te kunnen inloggen">
    </div>
    <div>
        <label for="lname">Wachtwoord:</label>
        <input type="password" id="password" name="password" aria-label="vul je wachtwoord hier om te kunnen inloggen">
    </div>
    <a href="#"><em>Wachtwoord vergeten?</em></a><br>   

    <input type="submit" value="Login">

  </form> 
</div>

<div class="registreren_form">
  <h2>Registreren</h2>
  <form method="GET" action="<?php echo url("aanmelden")?>"> 
    <div>
      <label for="fname">Naam:</label>
      <input type="text" id="fname" name="fname" value="Jone Dou" aria-label="vul je naam hier om een account te maken">
    </div>
    <div>
      <label for="lname">E-mail:</label>
      <input type="email" id="mail" name="mail" aria-label="vul je mail hier om een account te maken">
    </div>
    <div>
        <label for="lname">Telefoonnummer:</label>
        <input type="tel" id="telefoon" name="telefoon" aria-label="vul je telefoon nummer hier om een account te maken">
    </div>
    <div>
        <label for="lname">Wachtwoord:</label>
        <input type="password" id="password" name="password" aria-label="vul een wachtwoord hier om een account te maken">
    </div>
    <em>uw gegevens zijn 100% veilig</em><br>
    <input type="submit" value="Registreren">

  </form> 
</div>
</section>
<!-- <div class="buurtcampusfooter_img" style="background-image:url({{ asset('../image/BuurtcampusFooter.svg') }})">
</div> -->
@stop
 