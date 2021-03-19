<html>
  <head>
    <title>Title - @yield('title')</title>
  </head>
  <body>
    <div>
      @yield('header', View::make('component.header'))
    </div>
    <div>
      @yield('content', View::make('component.content', ['content'=>$content,'data'=>$data]))
    </div>
    <div>
      @yield('footer', View::make('component.footer'))
    </div>
  </body>
</html>