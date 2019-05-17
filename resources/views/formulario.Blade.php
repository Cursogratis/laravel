<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <form action="/basicas" method="POST">
        @csrf
        <input type="text" placeholder="nombre" name="txtnombre"/>
        <input type="text" placeholder="apellido" name="txtapellido"/>
        <input type="text" placeholder="documento" name="txtdocumento"/>
        <button type="submit" class="btn btn-primary">enviar</button>
    </form>
</body>
</html>