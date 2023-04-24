<?php
    
    include("conexion.inc.php");

    session_start();
    $USER = $_SESSION["USER"];

    include "navNotas.inc.php";
    include "header.inc.php";
    $resultado = mysqli_query($con,"SELECT 
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='LP' THEN PROMEDIO ELSE 0 END) AS LP,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='OR' THEN PROMEDIO ELSE 0 END) AS UR,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='PO' THEN PROMEDIO ELSE 0 END) AS PO,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='CO' THEN PROMEDIO ELSE 0 END) AS CO,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='CH' THEN PROMEDIO ELSE 0 END) AS CH,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='TA' THEN PROMEDIO ELSE 0 END) AS TA,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='PA' THEN PROMEDIO ELSE 0 END) AS PA,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='BE' THEN PROMEDIO ELSE 0 END) AS BE,
    SUM(CASE WHEN DEPTO.DEPARTAMENTO='SC' THEN PROMEDIO ELSE 0 END) AS SC
    FROM 
    (
    SELECT P.DEPARTAMENTO, AVG(I.NOTAFINAL) AS PROMEDIO
    FROM INSCRIPCION I, PERSONA P
    WHERE P.CI = I.CI_EST
    GROUP BY P.DEPARTAMENTO) AS DEPTO;");
    //print_r($resultado);
    $datos = mysqli_fetch_array($resultado);

?>

    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="text-align: center;">
                    <div class="section-title">PROMEDIO DE NOTAS POR DEPARTAMENTO</div>
                </div> <!-- end of col -->
            
                <div class="pricing pricing--yama">

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">LA PAZ</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["LP"]; ?><span class="pricing__period"></span></div>
                    </div>

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">ORURO</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["UR"]; ?><span class="pricing__period"></span></div>
                    </div>

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">POTOSÍ</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["PO"]; ?><span class="pricing__period"></span></div>
                    </div>
                    
                    <div class="pricing__item" style=" text-align: center;">
                        <h3 class="pricing__title" style="color:white; width: 375px;">COCHABAMBA</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["CO"]; ?><span class="pricing__period"></span></div>
                    </div>
                    
                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">CHUQUISACA</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["CH"]; ?><span class="pricing__period"></span></div>
                    </div>

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">TARIJA</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["TA"]; ?><span class="pricing__period"></span></div>
                    </div>

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">PANDO</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["PA"]; ?><span class="pricing__period"></span></div>
                    </div>

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">BENI</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["BE"]; ?><span class="pricing__period"></span></div>
                    </div>

                    <div class="pricing__item">
                        <h3 class="pricing__title" style="color:white; width: 375px;">SANTA CRUZ</h3>
                        <br>
                        <div class="pricing__price"><span class="pricing__currency"></span><?php echo $datos["SC"]; ?><span class="pricing__period"></span></div>
                    </div>
                    
                </div>


            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->



<?php
include "menu.inc.php";
include "footer.inc.php";
?>
