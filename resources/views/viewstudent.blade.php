
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EsiLink</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://stackpath.bootsrapcdn.com/bootsrap/4.1.3/css/bootsrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwE0ngsV7Zt27NXFoaoApmYm81iuXoPkF0JwJ8ERdknLPM0" crossorigin="anonymous">
    <title>Afficher les étudiants</title>
</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/admin') }}">
                    EsiRoot
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/admin">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/AjoutEtudiant">Ajouter un étudiant</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/viewstudent">Afficher les étudiants</a>
      </li>
      
    </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
                      @if(\Session::has('success'))
                    <div class="alert alert-danger">
                    <h4> {{ \Session::get('success') }}</h4>
                    </div>
                        @endif
<div class="container">

<div class="jumbotron">
<div class="line" style="text-align:right;">
    <a href="/admin/AjoutEtudiant" class="btn btn-primary"> Ajouter un étudiant </a>
    </div>
	<h1>Informations des étudiants</h1>
	<hr>
		<div class="line" style="text-align:middle;">
	</div><br>
<form>
	<table class="table table-bordered">
		<thead class="thead-dark">
			<tr>
				<th> ID Etudiant </th>
				<th> Nom </th>
				<th> Adresse email </th>
				<th> Numéro de téléphone</th>
				<th> EDITER </th>
				<th> SUPPRIMER </th>
			</tr>		
			<tbody>
			</thread>
				@foreach ($students as $row)
				<tr style ="background: white;">
					<td>{{ $row->id }}</td>
					<td>{{ $row->stud_name }}</td>
					<td>{{ $row->stud_email }}</td>
					<td>{{ $row->stud_phone }}</td>
					<td><a href="/click_edit/{{ $row->stud_email }}" class="btn btn-success">Editer</a></td>
					<td><a href="/click_delete/{{ $row->stud_email }}" class="btn btn-danger">Supprimer</a></td>				
				</tr>
				@endforeach
			</tbody>
		</table>
	</form>
</div>
</div>
</body>
</html>