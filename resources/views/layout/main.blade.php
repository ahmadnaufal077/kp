
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bengkel</title>
  <!-- Panggil Bootstrap -->
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/bootstrap.min.js"></script>
  <style type="text/css">
    body{
      background-color: #f0f5f5;
    }
  </style>
</head>
<body>  
    @include('layout.navbar')
    @yield('content')
</body>
</html>
