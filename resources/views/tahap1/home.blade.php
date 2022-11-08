@extends('layouts.app', ['title' => 'Homepage'])

@section('content')
<x-layouts.app />
{{-- @include('components.alert') --}}

@component('components.alert', ['title' => 'Keranjang'])

@slot('title')
<h3>Header componente</h3>
@endslot

{{-- ini adalah slot --}}
<p>
  Lorem ipsum dolor sit <strong>Amet</strong> consectetur adipisicing elit. Aliquam illum officia asperiores quas odio
  ullam explicabo
  amet, necessitatibus accusamus quibusdam voluptas eveniet optio minus esse, saepe magni quos ex! Quibusdam?
</p>
{{-- end slot --}}

@slot('footer')
Ini adalah Footer
@endslot

@endcomponent

<h1 style="color: #fff">Homepage</h1>

@endsection