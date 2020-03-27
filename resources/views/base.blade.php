<!DOCTYPE html>
<html lang="el">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>COVID-19</title>

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

 <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->
</head>
<body>
  <div class="container">

    <div class="row">
      <div class="col">

 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="{{route('show_travel_exclusion_form')}}">COVID-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

        <div class="navbar-nav">
          <a class="nav-item nav-link @if (Route::current()->getName() == 'show_travel_exclusion_form') active @endif" href="{{route('show_travel_exclusion_form')}}">Εξαίρεση μετακίνησης πολιτών<span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link d-none" href="#">Εξαίρεση μετακίνησης εργαζομένων</a>
          <a class="nav-item nav-link @if (Route::current()->getName() == 'statistics') active @endif" href="{{route('statistics')}}">Στατιστικά</a>
          <a class="nav-item nav-link @if (Route::current()->getName() == 'useful') active @endif" href="{{route('useful')}}">Χρήσιμα</a>
          <a class="nav-item nav-link @if (Route::current()->getName() == 'about') active @endif" href="{{route('about')}}">Σχετικά</a>
        </div>

      </div>
    </nav>
</div>
</div>

<div class="row">&nbsp;</div>

    @yield('main')

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!--  <script src="{{ asset('js/app.js') }}" type="text/js"></script> -->

</body>
</html>
