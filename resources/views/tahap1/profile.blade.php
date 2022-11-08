@extends('layouts.app', ['title' => 'Homepage'])

@section('content')

<x-alert>
  <x-slot name="title">
    Header compoenet
  </x-slot>
  <h2>Ini adalah halaman Profile</h2>

  <x-slot name="footer">
    Footer component
  </x-slot>
</x-alert>

<h1 style="color: #fff">Homepage</h1>

@endsection