<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-4 text-center">Nuevo servicio</h1>

            <form class="add-form" method="post">
                <input type="hidden" name="usuario">


                <fieldset>

                    <legend>Datos del cliente</legend>

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Títular</label>
                                <input type="text" class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">DNI</label>
                                <input type="text" class="form-control form-control-lg">
                            </div>
                        </div>

                    </div>

                </fieldset>
                
                

                <fieldset>

                    <legend>Datos del vehiculo</legend>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Marca</label>
                                <select class="custom-select custom-select-lg select" name="" id="">
                                    <option value="" disabled selected>Seleccionar marca</option>
                                    <option value="">Alfa Romeo</option>
                                    <option value="">BMW</option>
                                    <option value="">Citroën</option>
                                    <option value="">Dodge</option>
                                    <option value="">Fiat</option>
                                    <option value="">Ford</option>
                                    <option value="">Peugeot</option>
                                    <option value="">Volkswagen</option>
                                    <option value="">KIA</option>
                                    <option value="">Renault</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Modelo</label>
                                <input class="form-control form-control-lg">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="">Patente</label>
                                <input class="form-control form-control-lg">
                            </div>
                        </div>
                    </div>
                </fieldset>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Seleccionar tarea</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio">
                                <label class="form-check-label" for="defaultCheck1">
                                    Cambio de aceite
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio">
                                <label class="form-check-label" for="defaultCheck2">
                                    Cambio de filtros
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio">
                                <label class="form-check-label" for="defaultCheck2">
                                    Cambio de pastillas de freno
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio">
                                <label class="form-check-label" for="defaultCheck2">
                                    Correa de distribucion
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio">
                                <label class="form-check-label" for="defaultCheck2">
                                    Embrague
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Presupuesto</label>
                            <div class="input-group input-group-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    
                </div>
                

                
                


                <button type="submit" name="button" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
