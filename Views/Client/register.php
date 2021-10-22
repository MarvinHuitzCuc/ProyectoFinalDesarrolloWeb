<div class="container p-4">
    <form method="post" action="AddClient" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card text-center">
                    <div class="card-header ">
                        <output id="imageClient">
                            <img src="<?php 

                            if($model1 != null){
                                if($model1->Image != null){
                                    echo 'data:image/jpeg;base64,'.$model1->Image; 
                                }else{
                                    echo URL.RQ.'images/default.png'; 
                                }
                            }else{
                                echo URL.RQ.'images/default.png'; 
                            }

                            ?>" class="responsive-img" />
                        </output>                        
                    </div>
                    <div class="card-body">
                        <div class="caption text-center">
                            <label class="btn btn-primary" for="files">Cargar foto</label>
                            <input accept="image/*" type="file" name="file" id="files">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-5">
                <div class="panel  panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Registrar cliente</h3>
                    </div>
                    <div class="panel-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div id="header" class="bg-info">
                                        <h2 class="mb-0 t">
                                            <button class="btn btn-link text-light " type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Ingreso de informacion
                                            </button>
                                        </h2>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                     <div class="card-body">
                                        <div class="form-group">
                                            <input type="text" name="nid" placeholder="Número de Identificación" class="form-control" value="<?php echo $model1->NID ?? "" ?>" onkeypress="new Client().ClearMessages(this);" autofocus />
                                            <span id="nid" class="text-danger"><?php echo $model2->NID ?? "" ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Nombre"
                                            class="form-control" value="<?php echo $model1->Name ?? "" ?>" onkeypress="new Client().ClearMessages(this);"/>
                                            <span id="name" class="text-danger"><?php echo $model2->Name ?? "" ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lastname" placeholder="Apellido" class="form-control" value="<?php echo $model1->LastName ?? "" ?>" onkeypress="new Client().ClearMessages(this);"/>
                                            <span id="lastname" class="text-danger"><?php echo $model2->LastName ?? "" ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Número de Telefono" class="form-control" value="<?php echo $model1->Phone ?? "" ?>"  onkeypress="new Client().ClearMessages(this);"/>
                                            <span  id="phone" class="text-danger"><?php echo $model2->Phone ?? "" ?></span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="Dirección" placeholder="Direction" class="form-control" value="<?php echo $model1->Direction ?? "" ?>"  onkeypress="new Client().ClearMessages(this);"/>
                                            <span  id="direction" class="text-danger"><?php echo $model2->Direction ?? "" ?></span>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Correo Electronico" class="form-control" value="<?php echo $model1->Email ?? "" ?>" onkeypress="new Client().ClearMessages(this);"/>
                                            <span id="email" class="text-danger"><?php echo $model2->Email ?? "" ?></span>
                                        </div>
                                        <div class="form-group">
                                        <?php if($model1->Credit == 0){ ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="check1" name="credit">
                                                <label class="form-check-label" for="check1">
                                                Credito
                                                </label>
                                            </div>
                                        <?php }else{ ?>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="check1" name="credit" checked>
                                                <label class="form-check-label" for="check1">
                                                Credito
                                                </label>
                                            </div>
                                        <?php } ?>
                                        <span  class="text-danger"><?php echo $model2->Credit ?? "" ?></span>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                               <div class="col-md-12">
                                                <button type="submit" class="btn btn-success">Register</button>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                   <a href="<?php echo URL?>Client/Cancel" class="btn btn-warning text-white">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group">
                                         <input type="hidden" name="idclient" value="<?php echo $model1->IdClient ?? 0 ?>"/>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>