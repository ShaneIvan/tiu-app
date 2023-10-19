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
  Project
    </div>

    <div class=content-box>
      <div class=content>
      <h1>Set up your Project</h1>
    
      <h3>Prerequisites:</h3>
      - Install PHP: Make sure you have PHP installed on your system. You can check your PHP version by running php -v in your terminal. <br>
      - Install Composer: Composer is a dependency management tool for PHP. You can download and install it from Composer's official websiteLinks to an external site..<br>
      - Install a Web Server: You can use various web servers like Apache or Nginx, or you can use Laravel's built-in development server for testing purposes.<br>

      <h3>Create your Laravel Project.</h3>
      - Submit your work using the GitHub repository link.
    </div></div>


    </body>
</html>
