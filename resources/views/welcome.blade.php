@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
<div>
<div>
  <h1>Meer over Buurtcampus</h1>
  <p>In Buurtcampus Oost zoeken studenten samen met bewoners, professionals,
     ondernemers, docenten en onderzoekers gezamenlijk naar oplossingen voor kansrijke uitdagingen uit de buurt.</p>
</div>
</div>
@stop

