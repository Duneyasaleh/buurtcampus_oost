@extends('layout.master')
@section('title', 'Page Title')

@section('sidebar')
    @parent
@stop

@section('content')
<p>This is appended to the master sidebar.</p>vgudge
@stop