@extends('layouts.admin')
@section('title','test2')
@section('content')
hello world
@endsection

@section('contentheader')
hello
@endsection

@section('contentheaderlink')
<a href="http://www.google.com"> Go to googlooeeee</a>
<@php
    echo time();
@endphp
@endsection


