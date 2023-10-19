<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tiu App</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js')}}"></script>


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <header class="header">
    <a href="{{ route('home') }}"><h1 class="logo">Naruto</h1>
  <ul class="nav">
  <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    <li><a href="{{ route('characters') }}">Characters</a></li>
    <li><a href="{{ route('project') }}">Project</a></li>
  </ul>
</header>

    <body>

    <div id=container>
  Character List
  <div id=flip>
  <div><div>Obito</div></div>
    <div><div>Naruto</div></div>
    <div><div>Sasuke</div></div>
    
  </div>
</div>

<div class="holder">
  <div class="card">
    <div class="wrapper">
      <img src="https://i.pinimg.com/564x/b7/70/98/b770987f415a363fe558922f1770d663.jpg" class="cover-image" />
    </div>
    <img src="img/narutotext.png" class="title" />
    <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e0516fda-e907-4a96-b968-333a26dcd26c/d3ix4tq-6eb832af-6814-464d-aa89-6cd171dd8902.png/v1/fill/w_698,h_1144/naruto_png_3_by_hidan_sama1408_d3ix4tq-pre.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTQ3NCIsInBhdGgiOiJcL2ZcL2UwNTE2ZmRhLWU5MDctNGE5Ni1iOTY4LTMzM2EyNmRjZDI2Y1wvZDNpeDR0cS02ZWI4MzJhZi02ODE0LTQ2NGQtYWE4OS02Y2QxNzFkZDg5MDIucG5nIiwid2lkdGgiOiI8PTkwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.yGfF7QBatetQXgdbhTfauj0fIhEMaLvaALzKms1U2wQ" class="character" />
  </div>

  <div class="card">
    <div class="wrapper">
      <img src="https://i.pinimg.com/564x/00/93/9e/00939eec6e64ec50be12cee867a27c73.jpg" class="cover-image" />
    </div>
    <img src="img/obitotext.png" class="title" />
    <img src="img/obitochar.png" class="character" />
  </div>


  <div class="card">
    <div class="wrapper">
      <img src="https://i.pinimg.com/564x/e9/12/e1/e912e1836ae640a97a7deb4c9f3af66b.jpg" class="cover-image" />
    </div>
    <img src="img/sasuketext.png" class="title" />
    <img src="https://comicvine.gamespot.com/a/uploads/scale_super/11124/111240909/5031972-0298102064-latest" class="character" />
  </div>
  </div>





    </body>
</html>
