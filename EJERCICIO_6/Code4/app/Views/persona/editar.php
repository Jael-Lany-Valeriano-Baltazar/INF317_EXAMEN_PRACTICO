<?= $header ?>
<br>
<h4  class="card-title" style="color: #49475e"> Modificar datos</h4>
<div class="card row align-items-center">
    <div class="card-body col ">
        
        <p  class="card-text">


        <form method="post" action="<?=site_url('actualizar')?>" enctype="multipart/form-data">
        <div class="col-4 mb-3">
        <label for="ci" class="form-label">CI</label>
        <input type="text" name="ci" id="ci" class="form-control" value="<?=$person['CI']?>" aria-describedby="helpId" readonly="">
        </div>
        <div class="col-8 mb-3">
        <label for="nom" class="form-label">NOMBRE COMPLETO</label>
        <input type="text" name="nom" id="nom" class="form-control" value="<?=$person['NOMBRE_COMPLETO']?>" aria-describedby="helpId">
        </div>
        <div class="col-8 mb-3">
        <label for="fec" class="form-label">FECHA DE NACIMIENTO</label>
        <input type="date" name="fec" id="fec" class="form-control" value="<?=$person['FECHA_NAC']?>" aria-describedby="helpId">
        <div id="emailHelp" class="form-text">Formato: AAAA-MM-DD</div>
        </div>
        <div class="col-8 mb-3">
        <label for="tel" class="form-label">TELÉFONO</label>
        <input type="text" name="tel" id="tel" value="<?=$person['TELEFONO']?>" class="form-control" placeholder="(###)" aria-describedby="helpId">
        <div id="emailHelp" class="form-text">Incluya su código, ej.: (000)7#######</div>
        </div>
        <div class="col-4 mb-3">
        <label for="depa" class="form-label">DEPARTAMENTO</label>
        <input type="text" size="2" name="depa" id="depa" value="<?=$person['DEPARTAMENTO']?>" class="form-control" placeholder="LP" aria-describedby="helpId">
        <br>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Ingrese un código de 2 dígitos, según lo siguiente:
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    LP - LA PAZ <br>
                    OR - ORURO <br>
                    PO - POTOSÍ <br> 
                    CO - COCHABAMBA <br>
                    CH - CHUQUISACA <br>
                    TA - TARIJA <br>
                    PA - PANDO <br>
                    BE - BENI <br>
                    SC - SANTA CRUZ <br>
                </div>
                </div>
            </div>
            
        </div>
        
        </div>
        <br>
        <div class="d-grid gap-2 col-4" style="text-align:center;">
          <button type="submit" name="" id="" class="btn btn-success">Guardar</button>
        </div>
    </form>

        </p>
    </div>
</div>
    

<?= $footer ?>