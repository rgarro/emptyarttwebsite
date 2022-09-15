<?php
/**
 *    ________________
 *    |'-.--._ _________:
 *    |  /    |  __    __\
 *    | |  _  | [\_\= [\_\
 *    | |.' '. \.........|
 *    | ( <)  ||:       :|_
 *     \ '._.' | :.....: |_(o
 *      '-\_   \ .------./
 *      _   \   ||.---.||  _
 *     / \  '-._|/\n~~\n' | \
 *    (| []=.--[===[()]===[) |
 *    <\_/  \_______/ _.' /_/
 *    ///            (_/_/
 *    |\\            [\\
 *    ||:|           | I|
 *    |::|           | I|
 *    ||:|           | I|
 *    ||:|           : \:
 *    |\:|            \I|
 *    :/\:            ([])
 *    ([])             [|
 *     ||              |\_
 *    _/_\_            [ -'-.__
 *   <]   \>            \_____.>
 *     \__/     
 * 
 * :: CAKEPHP TEQUILA TRES LECHES WITH BLUE BERRY :::
 * CONTACT PAGE WITH AJAX FORM
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
session_start();
$_SESSION['unitoken'] = uniqid().microtime();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include_once("../includes/head.php");
        ?>
        <script src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/jquery.serializejson.js"></script>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
            <?php include_once("../includes/navigation.php"); ?>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                    include_once("../includes/topmenu.php");
                    ?>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
            <center><h3 class="text-center text-uppercase text-white">Contact Me</h3></center>
            <div class="card bg-dark" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Rolando Garro</h5>
    <h6 class="card-subtitle mb-2 text-muted"><a href= "mailto:rolando@emptyart.xyz" > rolando@emptyart.xyz </a>  </h6>
    <p class="card-text">Need Help With your Web Programming Project?</br> Contact me for a quote.</p>
    <a href="#" class="card-link"><a class="btn btn-outline-light" target="_blank" href=" https://wa.me/+18504610264"><i class="fab fa-fw fa-whatsapp"></i> +18504610264 </a>
  </div>
</div>
</br></br>  
            <div class="card bg-dark" style="width: 18rem;">
            <div class="card-body">
            <form id="contactForm">
            <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" name="name" required="required" class="form-control" id="exampleInputName">
  </div>              
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" required="required" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputMsg" class="form-label">Message</label>
    <input type="text" class="form-control" name="message" id="exampleInputMsg" required="required">
    <input type="hidden" id="unitoken" value="<?=$_SESSION["unitoken"] ?>" />
  </div>       
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
        </header>
        
        <!-- Footer-->
        <?php
        include_once("../includes/footer.php");
        ?>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; EmptyArt <?php echo date("Y");?></small></div>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script>
    $(document).ready(function(){
        $("#contactForm").submit(function( event ) {
            console.log( "Handler for .submit() called." );
          console.log($('#contactForm').serializeJSON());
  console.log("here we are ...");
            event.preventDefault();
           
        });
    });
    </script>
    </body>
</html>
