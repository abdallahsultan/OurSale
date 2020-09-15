@extends('admin.main.master')
@section('title', $page_title)
@section('content')
@php
$user = Auth::user();



@endphp
<router-view></router-view>

       
     
@endsection
