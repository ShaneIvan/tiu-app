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
  About
    </div>

    <div class="holder">
  <div class="card">
    <div class="wrapper">
      <img src="https://imgs.search.brave.com/2A_gB4Tw5FxVLKKuLkFF_sX30eqK7PgECxzBTIPiinM/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2VkL2U2/L2Y1L2VkZTZmNTY1/ODU4MDI4MWI1ZmFi/YWExNzE5MGExZTlk/LS1jb21pYy1jb3Zl/cnMtYm9vay1jb3Zl/cnMuanBn" class="cover-image" />
    </div>
  
  </div>

  <div class="card">
    <div class="wrapper">
      <img src="https://imgs.search.brave.com/afnpDiTgLR1k59FrLrel67J_swWrKmZYDI4JZNaoVq0/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2VmLzMw/L2I0L2VmMzBiNDdj/MmRjNWJhYjBkZTE2/OTk1MTI0ZTVmM2U5/LS1tYW5nYS1ib29r/cy1tYW5nYS1hcnQu/anBn" class="cover-image" />
    </div>
  </div>


  <div class="card">
    <div class="wrapper">
      <img src="https://imgs.search.brave.com/rtpt14WaDrUconqJZFGWlRW86jSR2uNchrugd2YOtp4/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzL2RmL2M5/LzM4L2RmYzkzODMz/OTE4NWRjMjVmNzY0/ZDdlMDgwODk5ZDI0/LS1uYXJ1dG8tdXp1/bWFraS1hbmltZS1u/YXJ1dG8uanBn" class="cover-image" />
    </div>
  </div>
  </div>

    </body>
</html>
