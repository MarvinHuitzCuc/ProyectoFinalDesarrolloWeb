<div class="container p-4">
    <form method="post" action="AddClient" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card text-center">
                    <div class="card-header ">
                        <output id="imagePrin">
                            <img src="<?php 

                            if($model1 != null){
                                if($model1->Image != null){
                                    echo 'data:image/jpeg;base64,'.$model1->Image; 
                                }else{
                                    echo URL.RQ.'images/icons/logo-google.png'; 
                                }
                            }else{
                                echo URL.RQ.'images/icons/logo-google.png'; 
                            }

                            ?>" class="responsive-img" />
                        </output>                        
                    </div>
                    <div class="card-body">
                        <div class="caption text-center">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-5">
                <div class="panel  panel-primary">
                    <div class="panel-heading">
                        <h1 class="panel-title">Bienvenidos(as) </h1>
                    </div>
                    <div class="panel-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <div id="header" class="bg-info">
                                        <h1 class="mb-0 t">
                                            <button class="btn btn-link text-light " type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Página de Distribuidora Primavera
                                            </button>
                                        </h1>
                                    </div>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                     <div class="card-body">
                                     <div id="header" class="bg-info">
                                        <h1 class="mb-0 t">
                                            <button class="btn btn-link text-light " type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Misión:
                                                Ser una empresa que trabaja para brindar a sus clientes la mayor diversidad productos en general bajo premisas de precios, calidad y servicio acorde a las exigencias del mercado comprometiéndonos con la capacitación constante de nuestro personal de trabajo para que éste sea altamente productivo y comprometido a mantener las preferencias y satisfacción de nuestros clientes con la finalidad de generar un crecimiento rentable.
                                            </button>
                                        </h1>
                                    </div>
                                        <div class="form-group">
                                           
                                        </div>
                                        <div id="header" class="bg-info">
                                        <h1 class="mb-0 t">
                                            <button class="btn btn-link text-light " type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Visión: Mantener un posicionamiento comercial en cuanto a las ventas, superando las perspectivas de calidad y servicio hacia nuestros clientes junto con el apoyo incondicional comprometido equipo de trabajo permitiéndonos así sostener un alto grado de responsabilidad social y comercial que nos garantice solidez financiera y crecimiento sostenible.
                                            </button>
                                        </h1>
                                    </div>
                                        <div class="form-group">
                                           
                                        </div>
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                          
                                        </div>
                                        
                                        <div class="row">
                                            
                                            
                                        </div>
                                        
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


