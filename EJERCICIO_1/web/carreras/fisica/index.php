<?php
include "../navI.inc.php";

?>

    <!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1" id="area-1">
            <img src="../logos/fisica.png" alt="" >
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h1>CARRERA DE FÍSICA</h1>
                <br>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering">1</span><span class="accordion-title">Presentación</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, inventore.
                            Quas perferendis magnam optio praesentium, ratione deserunt.
                            Iste ut repudiandae, id labore nesciunt nihil vitae magnam in vero quasi omnis!
                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingTwo">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                            <span class="circle-numbering">2</span><span class="accordion-title">Plan de Estudios</span>
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="accordion-body">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Ipsa numquam vitae fuga, autem, suscipit officia sed aperiam eligendi voluptatibus nam, fugiat eum. 
                            Magni corrupti libero excepturi laboriosam dolor autem ducimus.
                        </div>
                    </div>
                </div> <!-- end of item -->
            
                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                            <span class="circle-numbering">3</span><span class="accordion-title">Referencias</span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Reprehenderit alias dolorum maxime exercitationem esse ullam natus ad distinctio aut excepturi aliquam delectus mollitia molestiae iusto, laudantium, autem minus adipisci sint!
                        </div>
                    </div>
                </div> <!-- end of item -->
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->



<?php

include "../menuI.inc.php";
include "../../footer.inc.php";
?>


