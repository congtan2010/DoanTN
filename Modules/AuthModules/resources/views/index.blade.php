@extends('authmodules::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('authmodules.name') !!}</p>
@endsection
