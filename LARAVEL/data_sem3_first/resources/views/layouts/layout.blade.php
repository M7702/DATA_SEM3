<body>
    <main>
        @yield('content') <!-- This is where the content of the child view will be injected -->
    </main>
</body>

<!-- home.blade.php -->
@extends('layouts.layout')

@section('content')
    <p>Home page content</p>
@endsection



# including partial views

.blade.php

<div class="sidebar">
    <ul>
        <li><a href="#">HOme</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</div>

<!-- home.blade.php -->
 <body>
    <div class="container">
        <aside>
            @include('partials.sidebar')
        </aside>

        <main>
            @yield('content')
        </main>
    </div>
 </body>

 <!-- Dynamic Content in Master Layout -->
  public function showHomePage() {
    return view('home', ['title' => 'Home Page']);
    return view('home')->with('title', 'Home Page');
  }
  <!-- in layout -->
    <title>{{ $title ?? 'Default Title' }}</title>