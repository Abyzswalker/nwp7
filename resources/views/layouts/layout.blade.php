<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" >
@include('layouts.style')

</head>

<body>

<div id="wrapper">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</div>

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@include('layouts.scripts')

</body>
</html>
