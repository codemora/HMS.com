<!DOCTYPE html>
<html lang="en">
	<head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href={{ asset("css/custom.css")}}>
        <link rel="stylesheet" href={{ asset("css/flickity.min.css")}}>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href={{ asset("materialize/css/materialize.min.css")}} media="screen, projection">
        <script type="text/javascript" src={{ asset("materialize/js/jquery-3.2.1.min.js")}}></script>
        <script type="text/javascript" src={{ asset("js/flickity.pkgd.min.js")}}></script>
		<title> @yield('title') {{" | " . config('app.name','HMS')}}</title>
		<style type="text/css">
			body{
				background-color: #DDDDDD;
				display: flex;
				min-height: 100vh;
				flex-direction: column;
				background-image: url();
				background-position: center center;
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: cover;
			}
			main{
				flex: 1 0 auto;
			}
		</style>
	</head>
	<body class="whitesmoke" >

		<header>
            @include('inc.navbar')
        </header>

        <main>
            @yield('content')
        </main>

		<footer>
            @include('inc.footer')
        </footer>

		<script type="text/javascript" src={{asset("materialize/js/materialize.min.js")}}></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('.modal').modal({
					dismissible: true,
          			opacity: .6,
					startingTop: '80%',
					inDuration: 300,
					outDuration: 300,
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.dropdown-button').dropdown({
					alignment: 'left',
					hover: false
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.ul.tabs').tabs();
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.button-collapse').sideNav({
					menuWidth: '100vw',
					edge : 'left',
					draggable: true
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.slider').slider({
					height: 500,
					indicators: false
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#menuclose').click({
					$('.button-collapse').sideNav('destroy');
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function(){
	      		$('.carousel').carousel();
	    	});
		</script>
    <script type="text/javascript">
			$(document).ready(function() {
			    $('select').material_select();
			  });
		</script>
	</body>
</html>
