@extends('app')

@section('title', 'Page Title')

@section('sidebar')
  @parent

  <p>This is appended master sidebar </p>
@endsection

@section('content')
  <p>This is my body </p>
@endsection

