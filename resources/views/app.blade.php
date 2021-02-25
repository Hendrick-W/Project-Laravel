<html>
  <head>
    <title>Title - @yield('title')</title>
  </head>
  <body>
    <div>
      @yield('testview', View::make('component.header')->with('comment', $nama))
    </div>
    <div>
      @yield('testview', View::make('component.content')->with('comment', $nama))
    </div>
    <div>
      @yield('testview', View::make('component.footer')->with('comment', $nama))
    </div>
    @section('sidebar')
      This is a master sidebar {{$nama}}
    @show
    <div class="container">
      @yield('content')
    </div>
    
  </body>
</html>