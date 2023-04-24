<?= $header ?>
<br>
        <div class="table-responsive">
                <table class="table table-striped" style="text-align:center;">
                    <thead class="thead-ligth">
                        <tr>
                            <th scope="col">CI</th>
                            <th scope="col">NOM. COMPLETO</th>
                            <th scope="col">FECHA NAC.</th>
                            <th scope="col">DEPARTAMENTO</th>
                            <th scope="col">TELÉFONO</th>
                            <th scope="col">OPERACIONES</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            foreach($persons as $person):
                        ?>

                        <tr class="">
                            <td scope="row"><?=$person['CI'];?></td>
                            <td><?=$person['NOMBRE_COMPLETO'];?></td>
                            <td><?=$person['FECHA_NAC'];?></td>
                            <td><?=$person['DEPARTAMENTO'];?></td>
                            <td><?=$person['TELEFONO'];?></td>
                            <td>
                                <div class="row">
                                    <div class="d-grid gap-2 col-6">
                                        <a href="<?=base_url('editar/'.$person['CI']); ?>" type="button" name="" id="" class="btn btn-warning">Editar</a>
                                    </div>
                                    <div class="d-grid gap-2 col-6">
                                        <a href="<?=base_url('eliminar/'.$person['CI']); ?>" type="button" name="" id="" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                                
                            </td>

                        </tr>
                        
                        <?php
                            endforeach;
                        ?>

                    </tbody>
                </table>
                <div class="container">
                <div class="row">
                    <div class="col">
                   </div> 
                   <div class="d-grid gap-2 col-6 mx-auto">
                        <a class="btn btn-primary" href="<?=base_url('crear')?>">Agregar</a>
                   </div> 
                   <div class="col">
                   </div>        
                </div>
                </div>
                
                            <br><br>

            </div>
<?= $footer ?>