@extends('layouts.admin')
@section('title','الرئيسيه')


@section('content')

<div class="row" style="background-image: url({{asset('assets/admin/images/background1.jpg')}});background-size:cover;background-repeate:ni-repeate;height: 100vh;">
</div>

@endsection

@section('contentheader')
الرئيسيه
@endsection

@section('contentheaderlink')
<a href="{{route('admin.dashboard')}}"> الرئيسيه </a>
@endsection



@section('contentheaderlink')
contentheaderactive
@endsection
