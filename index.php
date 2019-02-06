<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">        
        <title>Inicio</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="assets/jQuery/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        echo 'Hello world';
        ?>

        <div class="header">
            <h1>Octavo Sistemas</h1>
        </div>

        <div class="row">
            <div class="col-3 col-s-3 menu">
                <ul>
                    <li>Registro de Paquetes</li>
                    <li>Registro de detalle</li>
                    <li>Consulta de paquetes</li>
                </ul>
            </div>

            <div class="col-6 col-s-9">
                <h1>Registro de Promociones</h1>

                <form class="" method="post">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="text" name="descripcion" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button> 
                </form>

            </div>

            <div class="col-3 col-s-12">
                <div class="aside">
                    <h2>Paquetes Promocionales?</h2>
                    <p>Registra tu paquete.</p>

                </div>
            </div>
        </div>

        <div class="footer">
            <p>Resize the browser window to see how the content respond to the resizing.</p>
        </div>
    </body>
</html>
