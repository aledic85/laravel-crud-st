<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta charset="utf-8">
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
     <title>Smartphone</title>
   </head>
   <body>
     <div class="container">
       <div class="row flex-column align-items-center mt-5">
         <header>
           <a href="{{route('smartphones.index')}}"><h1>Smartphone</h1></a>
         </header>
           @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

            @if (session('success'))
              <div class="alert alert-success">
                {{session('success')}}
              </div>
            @endif

         @yield('content')
       </div>
     </div>
     <footer class="d-flex flex-column align-items-center mt-5">
       <h1>Hello from footer</h1>
     </footer>
   </body>
 </html>
