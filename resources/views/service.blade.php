<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>

    {{-- css bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- my style --}}

  </head>
  
  <body class="p-5">

    <h2>link</h2>

    <a href="{{route('homePage')}}">Torna alla home</a>
    <br>
    <a href="{{route('aboutUsPage')}}">Scopri chi siamo</a>

    <h1>I nostri servizi</h1>

    @foreach ($servizi as $service)
        
        <h1>Nome: {{$service['name']}}</h1>
        <p>Descrizione: {{$service['description']}}</p>
        <p>Costo: {{$service['cost']}}</p>

        <button class="btn">
          <a href="{{route('detailPage', ['id'=> $service['id']])}}" >Dettagli</a>
        </button>
            
    @endforeach


    
    {{-- script bootstra --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- my script --}}

  </body>
</html>