<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="">USCO</a>
    </div>
    <div class="row">
    @foreach($persona as $persona)
        <div class="col-6">
                <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">{{$persona->nombre}} {{$persona->apellidos}}</h5>
                        <p class="card-text">Documento: {{$persona->documento}}</p>
                        <a href="/basicas/create" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <br>
    </div>
    <button>enviar</button>
</body>
</html>