<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Panaderia Concho</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">
	<link href="./css/style.css" rel="stylesheet"/>
	<link href="./css/main.css" rel="stylesheet"/>
 <script src="js/formUser.js"></script>


    </head>

    <body class="text-center">


<div class="row">
  <div class="col-md-4 mx-auto" id="formU">
    <div class="card mt-4 text-center">
      <div class="card-header">
        <h1 class="h4">
          Actualizar Pan
        </h1>
      </div>

<?php
$nom = $_POST['Nombre2'];
  $conn = mysqli_connect('localhost','root','resident2580','concho');
  $result = mysqli_query($conn, "select * from Pan where NombreP = '".$nom."'");

 while($row = mysqli_fetch_array($result)) {

?>

      <div class="card-body">
<div class="form-group">
<form name="formularioDatos" method="post" action="./php/updatePan.php">
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" value="<?php echo $row['NombreP'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <input id="lname" name="imagen" type="text" placeholder="Url de imagen" class="form-control" value="<?php echo $row['Imag'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <input id="lname2" name="precio" type="text" placeholder="Cantidad" class="form-control" value="<?php echo $row['cantidad'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <input id="email" name="cantidad" type="text" placeholder="Precio" class="form-control" value="<?php echo $row['precio'];?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
				<button type="submit" id="can" class="btn btn-primary btn-lg" onclick="cancelar()">Cancelar</button>
                            </div>
                        </div>

      </div>
    </div>
   <form>
  </div>
</div>
	<?php
}
mysqli_close($conn);
?>
<!-- Footer -->
        

        <!-- Javascript -->
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

<footer class="footer-container">
        
	        <div class="container">
	        	<div class="row">
	        		
                    <div align="center" class="col">
                    	&copy; 2019 Panaderia Concho S.A de C.V. Todos los Derechos Reservados.
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-facebook"></i>
                      <i class="fab fa-instagram"></i>
                    </div>
                    
                </div>
	        </div>
                	
        </footer>

</html>
