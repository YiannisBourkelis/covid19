<!DOCTYPE html>
<html lang="el">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="icon" href="data:;base64,iVBORw0KGgo=">
  
  <title>COVID-19</title>

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">

    <div class="row">
      <div class="col">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

      <div class="mx-auto">
          <a class="navbar-brand" href="{{route(session('country', '').'_show_travel_exclusion_form')}}">COVID-19</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
              <span class="navbar-toggler-icon"></span>
          </button>
      </div>

        <div class="navbar-collapse collapse dual-collapse2">
            <ul class="navbar-nav">

     
                <li class="nav-item">
                  <a class="nav-item nav-link text-nowrap @if (Route::current()->getName() == session('country', '').'_show_travel_exclusion_form') active @endif" href="{{route(session('country', '').'_show_travel_exclusion_form')}}">Εξαίρεση μετακίνησης πολιτών<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link d-none" href="#">Εξαίρεση μετακίνησης εργαζομένων</a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link @if (Route::current()->getName() == session('country', '').'_statistics') active @endif" href="{{route(session('country', '').'_statistics')}}">Στατιστικά</a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link @if (Route::current()->getName() == session('country', '').'_useful') active @endif" href="{{route(session('country', '').'_useful')}}">Χρήσιμα</a>
                </li>
                <li class="nav-item">
                  <a class="nav-item nav-link @if (Route::current()->getName() == session('country', '').'_about') active @endif" href="{{route(session('country', '').'_about')}}">Σχετικά</a> 
                </li>
            </ul>
        </div>

        <div class="navbar-collapse collapse dual-collapse2">
            <ul class="navbar-nav ml-auto">
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
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.1/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
