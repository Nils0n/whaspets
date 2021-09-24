@extends('site.layouts.template')

@section('content')

<h1 class="title"> Cadastro Pet </h1>


@component('site.layouts.components.form' , ['option' => 'Cadastrar'])

@endcomponent

@endsection