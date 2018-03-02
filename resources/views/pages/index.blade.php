@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    </br>
        AppKey: 
    <i>{{config('app.key', '123456')}}</i>
    
    </br>
    AppName: 
    <i>{{config('app.url', '123456')}}</i>
@endsection