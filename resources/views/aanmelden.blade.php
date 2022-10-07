@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<section class="aanmelden_page">
<div class="registreren_form">
  <h2>Inloggen</h2>
  <form action="/overzicht_page"> 
    <div>
        <label for="lname">E-mail:</label>
        <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="lname">Wachtwoord:</label>
        <input type="password" id="password" name="password">
    </div>
    <a href="#"><em>Wachtwoord vergeten?</em></a><br>   

    <input type="submit" value="Login">

  </form> 
</div>

<div class="registreren_form">
  <h2>Registreren</h2>
  <form action="/aanmelden"> 
    <div>
      <label for="fname">Naam:</label>
      <input type="text" id="fname" name="fname" value="Jone Dou">
    </div>
    <div>
      <label for="lname">E-mail:</label>
      <input type="email" id="mail" name="mail">
    </div>
    <div>
        <label for="lname">Telefoonnummer:</label>
        <input type="tel" id="telefoon" name="telefoon">
    </div>
    <div>
        <label for="lname">Wachtwoord:</label>
        <input type="password" id="password" name="password">
    </div>
    <em>uw gegevens zijn 100% veilig</em><br>
    <input type="submit" value="Registreren">

  </form> 
</div>
</section>
<!-- <div class="buurtcampusfooter_img" style="background-image:url({{ asset('../image/BuurtcampusFooter.svg') }})">
</div> -->
@stop
 