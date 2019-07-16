<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href=css/estilo.css>
    <style type="text/css">
        .slider{
        background: url("images/background.jpg");
        height: 80vh;
        background-size: cover;
        background-position: center;
      }
      .contact{
        background: url("images/contact.jpg");
        height: 100vh;
        background-size: cover;
        background-position: center;
      }
      @media (max-width: 991px) {
  .contact {
    background: url("images/contact.jpg");
        height: 140vh;
        background-size: cover;
        background-position: center;
  }}
    </style>
    <title>Punto Digital</title>
    
  </head>
   
  <body>
    

   <!-- menu de navegacion -->
    <nav class="navbar fixed-top  flex-md-nowrap p-0 d-none d-xl-block col-sm-1">
      <a class="navbar-brand col-sm-1 col-md-2 mr-0" href="#home">Punto Digital</a> <br>
      <a class="navbar-brand col-sm-1 col-md-2 mr-0" href="cerrar.php"> Cerrar Sesion </a>   
       
    </nav>


        <!-- Header -->
      <section class="container-fluid slider col-sm-10 float-right border-left"> 
        

        
        <A name="home"><h1 class="display-4 pb-5 pt-5 text-white ml-2 font-weight-bold"> Punto Digital</h1> </A> 
        <h4 class="text-white ml-5" > </h4> 
        </section>

     

     <!-- Materias -->
    <section class="container-fluid d-flex col-sm-10 float-right justify-content-center border-left">
        <A name="materias"><h1 class=" pb-5 textorange pt-5 pb-5 font-weight-bold">Materias</h1> </A> 
    </section>

    <!-- Cards1 -->

     <section class="container-fluid d-flex col-sm-10 float-right justify-content-center border-left">
         <div class="card-deck">
          <div class="card">
            <img class="card-img-top img-fluid" src="images/fisica.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Dactilografia</h5>
              <p class="card-text">
                       Se emplea como sinónimo de mecanografía. Ambos términos aluden a la técnica que se desarrolla al utilizar el teclado de una máquina para escribir. 
                </p>
                  
            </div>   
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="images/quimica.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Scratch</h5>
              <p class="card-text">
                       Es un lenguaje de programación que sirve para crear historias interactivas, juegos y animaciones; además de facilitar la difusión de las creaciones finales con otras personas vía Web.
                </p>
                  
            </div>
          </div>
          <div class="card">
            <img class="card-img-top img-fluid" src="images/estadistica.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Marketing Digital</h5>
              <p class="card-text">
                       Es la aplicación de las estrategias de comercialización llevadas a cabo en los medios digitales.
                </p>
                
            </div>
          </div>
        </div>
     </section>

          
        </div>
     </section>

    
    <!-- contacto -->
    <section class="container-fluid d-flex col-sm-10 float-right contact border-left flex-column">
       <div class="row text-center">
           <div class="text-center col-12">
             <A name="contacto"><h1 class="text-black  pt-5 pb-5 font-weight-bold ">Si querés inscribirte ingresa aquí</h1></A> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-4 "> 
                <form>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary custom-btn mt-1"><a href="../inscripcion-view.html">Enviar</button></a>
                  </div>
                </form> 
            </div>
           
            <div class="col-12 col-lg-2 m-2 ">
                <p class="text-white font-weight-bold "></p>
                <p class="text-white font-weight-bold "></p>
            </div>
        </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>