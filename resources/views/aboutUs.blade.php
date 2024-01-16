<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>

    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- my style --}}

  </head>
  <body class="p-5">
  
    <h1>About Us</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem delectus enim ducimus, a similique accusantium distinctio perspiciatis modi dolor facilis natus culpa ipsam illo maxime, laboriosam laborum iste quod architecto. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aspernatur optio officia ipsa eius eaque aliquid numquam, ipsum cumque error beatae nam repellendus ab adipisci? Quam voluptatum sapiente cum beatae.</p>




    <h2>link</h2>

    <a href="{{route('homePage')}}">Torna alla home</a>
    <br>
    <a href="{{route('servicesPage')}}">Scopri i nostri servizi</a>

    {{-- script bootstra --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- my script --}}

  </body>
</html>