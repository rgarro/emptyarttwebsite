<?php
//echo "chunky Bacon! chunky Bacon! where is my pickup?";
/**
 *           __
 *.-.__      \ .-.  ___  __
 *|_|  '--.-.-(   \/\;;\_\.-._______.-.
 *(-)___     \ \ .-\ \;;\(   \       \ \
 * Y    '---._\_((Q)) \;;\\ .-\     __(_)
 * I           __'-' / .--.((Q))---'    \,
 * I     ___.-:    \|  |   \'-'_          \
 * A  .-'      \ .-.\   \   \ \ '--.__     '\
 * |  |____.----((Q))\   \__|--\_      \     '
 *    ( )        '-'  \_  :  \-' '--.___\
 *     Y                \  \  \       \(_)
 *     I                 \  \  \         \,
 *     I                  \  \  \          \
 *     A                   \  \  \          '\
 *     |              snd   \  \__|           '
 *                           \_:.  \
 *                             \ \  \
 *                              \ \  \
 *                               \_\_|
 * 
 * :: CAKEPHP TEQUILA TRES LECHES WITH BLUE BERRY :::
 * BokoHaram fighters running 50 yards left from a T72 in the last days of Sirte
 * Handing machetes, beheading a pow behind. Hachis sun shinning a wonderful day
 * Red Bull mig17 , dirlewanger ghost surfing sirte , my colonel fled to Macondo
 * Dr Strangelove Black iPhone the doom starts with the iWatch, Nuclear Bliss cbd , thc0 
 * magic bullets from Gao, magic bullets from Timbuctu, Falklands are British !!! 
 * Caro Quintero cayo en escazu, esbirros de corazon aquino, 
 * Esta letra verde se queda en el lado del UNIX, 
 *  Pow times product power root slerps the rocket words ...
 *  dot product to the parallel world linear algebra of my Slingshot Turbine
 * The mormons killed the quackers its written in a museum in Wasco ..
 * the quackers resurect ancient creatures before going to war
 * Pawnees sacred pastures ,Navajo, Sioux, Comanche , Chipewa, Omaha, smoking the pipe of peace !!
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
        <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="/libs/threeb.min.js"></script>
    <script src="/libs/OrbitControls.js"></script>
    <!-- <script src="libs/MultiMaterial.js"></script> -->
    <!-- <script src="libs/JSONLoader.js"></script> -->
    <script src="/libs/dat.gui.min.js"></script>
    <script src="/libs/stats.min.js"></script>
    <script src="/libs/soundjs-0.6.2.min.js"></script>
    <script src="/emptyLibJS/o.js"></script>
    <script src="/emptyLibJS/3D/Util/DataStats.js"></script>
    <script src="/emptyLibJS/3D/Util/Texture.js"></script>
    <script src="/emptyLibJS/3D/Util/Light.js"></script>
    <script src="/emptyLibJS/3D/Util/Tools.js"></script>
    <script src="/emptyLibJS/3D/Util/PropsRemover.js"></script>
    <script src="/emptyLibJS/3D/Util/Controlable/TerrainVehicle.js"></script>
    <script src="/emptyLibJS/3D/Util/Controlable/XZMovableGroup.js"></script>
    <script src="/emptyLibJS/3D/Util/Props/TimedFadeable.js"></script>
    <script src="/emptyLibJS/3D/Util/Props/SmokeEmitter.js"></script>
    <script src="/emptyLibJS/3D/Templates/Basic_3D_Template.js"></script>
    <script src="/emptyLibJS/3D/Templates/Basic_3D_Gravity.js"></script>
    <script src="/emptyLibJS/3D/Templates/Game.js"></script>
    <script src="/emptyLibJS/3D/Util/AI/FlyingThing.js"></script>
    <script src="/emptyLibJS/3D/Util/AI/FollowAndSurround.js"></script>
    <script src="/emptyLibJS/3D/Util/AI/Orbitator.js"></script>
    <script src="/emptyLibJS/3D/Factories/SkyBoxFactory.js"></script>
    <script src="/emptyLibJS/3D/Util/Screen/InfoLabel.js"></script>
    <script src="/emptyLibJS/3D/Util/AI/selfCenteredHorizontalRotator.js"></script>
    <script src="/emptyLibJS/3D/Util/AI/selfCenteredVerticalRotator.js"></script>
    <script src="/emptyLibJS/3D/Util/Mechanics/horizontalRectifierOfVerticalTrajectory.js"></script>

    <!-- physics -->
  <script src="/WipeOutJS/lib/Wo.js"></script>
  <script src="/WipeOutJS/lib/Planet.js"></script>
  <script src="/WipeOutJS/lib/Core/PhysicObject.js"></script>
  <script src="/WipeOutJS/lib/Mechanics/FallingBouncer.js"></script>
  <script src="/WipeOutJS/lib/Mechanics/BallisticObject.js"></script>
  <script src="/WipeOutJS/lib/Mechanics/ObeyGravity.js"></script>
  <script src="/WipeOutJS/lib/Helper/EventHorizon.js"></script>
    <!-- end physics -->
    <!-- Kalero -->
    <script src="/emptyLibJS/3D/Games/Kalero/FallingBall.js"></script>
    <script src="/emptyLibJS/3D/Games/Kalero/Tracks.js"></script>
    <script src="/emptyLibJS/3D/Games/Kalero/Shell.js"></script>
    <script src="/emptyLibJS/3D/Games/Kalero/D5tGun.js"></script>
      <script src="/emptyLibJS/3D/Games/Kalero/Tank.js"></script>
      <script src="/emptyLibJS/3D/Games/Kalero/TestTarget.js"></script>
        <script src="/emptyLibJS/3D/Games/Kalero/HeliPropeller.js"></script>
        <script src="/emptyLibJS/3D/Games/Kalero/HeliRudder.js"></script>
        <script src="/emptyLibJS/3D/Games/Kalero/Helicoptero.js"></script>
        <script src="/emptyLibJS/3D/Games/Kalero/Condor.js"></script>
      <script src="/emptyLibJS/3D/Games/Kalero/Kalero.js"></script>
      <style>
#gameInfo {
position: absolute;
top: 80px;
left: 30px;
width: 300;
text-align: center;
z-index: 100;
display:block;
}
</style>      
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
            <div id="gameContainer" class="container">
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
        <script>
    $(document).ready(function(){
      var app = new Kalero();
      //app.setContainer('app');
      //console.log(app);
      app.init();
      function handleResize(){
        app.handleResize();
      }
      app.handleResize();
      window.addEventListener('resize', handleResize, false);
    });
    </script>
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
