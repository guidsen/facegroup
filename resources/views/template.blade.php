<html>
<head>
    <title>Facegroup</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600,400' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/styles/template.css" rel="stylesheet">
</head>
<body>
@include('navbar')
<div class="container @yield('container-class')">
    @yield('content')
</div>
</body>
</html>