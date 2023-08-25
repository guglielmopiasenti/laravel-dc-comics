<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{asset('img/dc-logo.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{env('APP_NAME')}} | @yield('title')</title>
    {{-- importing assets --}}
    @vite('resources/js/app.js')
    @yield('style')
  </head>
  <body>
    {{-- Header --}}
    @include('includes.header')
    {{-- Main --}}
    <main>
      @yield('main-content')
    </main>
    {{-- Footer --}}
    @include('includes.footer')
  </body>
</html>