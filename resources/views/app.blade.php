<!DOCTYPE html>
  @include('sections.head')
<html>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <App ruta="{{route('basepath')}}"></App>

    </div>
    @include('sections.script')
  </body>
</html>