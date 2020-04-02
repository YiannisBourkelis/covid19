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

      <div class="mx-auto">
          <a class="navbar-brand" href="{{route('show_travel_exclusion_form')}}">COVID-19</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>

        <div class="navbar-collapse collapse dual-collapse2">
            <ul class="navbar-nav">

     
                <li class="nav-item">
                  <a class="nav-item nav-link text-nowrap @if (Route::current()->getName() == 'show_travel_exclusion_form') active @endif" href="{{route('show_travel_exclusion_form')}}">Εξαίρεση μετακίνησης πολιτών<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link d-none" href="#">Εξαίρεση μετακίνησης εργαζομένων</a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link @if (Route::current()->getName() == 'statistics') active @endif" href="{{route('statistics')}}">Στατιστικά</a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link @if (Route::current()->getName() == 'useful') active @endif" href="{{route('useful')}}">Χρήσιμα</a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link @if (Route::current()->getName() == session('country', '').'_about') active @endif" href="{{route(session('country', '').'_about')}}">Σχετικά</a> 
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse dual-collapse2">
            <ul class="navbar-nav ml-auto d-none">
                <li class="nav-item">
                    <a class="nav-link @if (session('country') === '') active @endif" href="{{route('change_country', ['country' => 'greece', 'current_route_name' => Route::current()->getName()] )}}">Ελλάδα</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (session('country') === 'cyprus') active @endif" href="{{route('change_country', ['country' => 'cyprus', 'current_route_name' => Route::current()->getName()] )}}">Κύπρος</a>
                </li>
            </ul>
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
