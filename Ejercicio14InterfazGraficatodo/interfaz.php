<?php
include("ejercicio14bd.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administra tus tareas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style> 
        body{
            background-color: yellow;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <p class="mensaje-tarea-agregada">
                    <script>
                        var mensajeagregado = "<?php echo $success; ?>";
                        var elementoMensaje2 = document.querySelector('.mensaje-tarea-agregada');
                        elementoMensaje2.innerHTML = mensajeagregado;
                    </script>
                </p>
            </div>
            <div class="card-body">
                <form action=""  method="post">
                    ingrese una tarea: <input required class="form-control" type="text" name="tarea" id="">
                    <br>
                    <button class="btn btn-success" type="submit">Envia tarea</button>
                    <br>
                </form>
            </div>
            <div class="card-footer text-muted">
                <p class="mensaje-eliminacion">
                    <script>
                        var mensajeEliminacion = "<?php echo $mensaje; ?>";
                        var elementoMensaje = document.querySelector('.mensaje-eliminacion');
                        elementoMensaje.innerHTML = mensajeEliminacion;
                    </script>

                </p>
            </div>
        </div>
    </div>


    <div class="col-md-6 float-end">
        <div class="table-responsive">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tarea</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($datostarea as $datotarea){ ?>
                        <tr class="">
                            <td> <?php echo $datotarea[0]; ?> </td>
                            <td><?php echo $datotarea[1]; ?></td>
                            <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $datotarea[0]; ?>" role="button">Borrar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>