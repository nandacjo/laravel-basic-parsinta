<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Parsinta</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- @isset($style)
  {{ $style }}
  @endisset --}}

    {{ $style }}

    {{-- @if (isset($style))
  {{ $style }}
  @endif
  --}}

</head>

<body>
    {{-- @include('layouts.navbar') --}}

    <x-navbar />

    <main @class(['container', 'pt-4'])>
        {{ $slot }}
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
