<?php
    include_once("View/Header.php");
?>
    
    <!--Start Main-->

    <?php
        if(!isset($_GET['mod'])){
            include_once ("Controller/HangHoa/New.php");
        }
        if(isset($_GET['mod'])){
            $a = ucfirst($_GET['mod']);
            $b = ucfirst($_GET['act']);
            include_once("Controller/".$a."/".$b.".php");
        }
	?>
    <?php
        include_once("View/Footer.php");
    ?>

<?php
    ob_end_flush();
?>