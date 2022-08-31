<?php
/**
 *                     .==.
 *                  ()''()-.
 *       .---.       ;--; /
 *     .'_:___". _..'.  __'.
 *     |__ --==|'-''' \'...;
 *     [  ]  :[|       |---\
 *     |__| I=[|     .'    '.
 *     / / ____|     :       '._
 *    |-/.____.'      | :       :
 *   /___\ /___\      '-'._----'
 * 
 * :: CAKEPHP TEQUILA TRES LECHES WITH BLUE BERRY :::
 * CONTACT
 * San Marcos de Apalache, ruega por nosotros. Virgen del missisipi llevanos en tu gloria 
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include_once("../includes/head.php");
        ?>
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
                portfolio
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
    </body>
</html>
