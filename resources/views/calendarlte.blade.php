@extends('adminlte::page')

@section('htmlheader_title')
    Exemple calendari
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <full-calendar></full-calendar>
        <multiselect></multiselect>
    </div>
@endsection