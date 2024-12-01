@extends('layouts.masterlayout')
@section('title','About us')
@section('content')
<p>This is ou</p>
@php
$user_type = 'Admin';
@endphp
@if($user_type == 'Admin')
<p>hello admin</p>
@endif
@endsection