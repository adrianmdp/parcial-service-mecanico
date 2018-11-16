<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center ">

        <div class="full-height py-5 w-75">
            <h1 class="mb-5 text-center">Services</h1>

            <div id="services-list">    

                <table class="table">
                    <thead>
                        <tr>
                            <th>Titular</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Patente</th>
                            <th>Servicio</th>
                            <th>Presupuesto</th>
                            <th class="text-center">Estado</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        <tr>
                            <td>Gian Franco Stabile</td>
                            <td>Volkswagen</td>
                            <td>Gol Trend 1.6</td>
                            <td>HIJ 987</td>
                            <td>Cambio de aceite</td>
                            <td>$ 1500</td>
                            <td class="text-right">
                                <button class="btn btn-outline-light" disabled>
                                    <i class="fas fa-question" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light" disabled>
                                    <i class="fas fa-wrench" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light" disabled>
                                    <i class="fas fa-check" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light" data-toggle="modal" data-target="#modal1">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <div class="modal fade" id="modal1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content text-secondary">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enviar mensaje al cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <label for="">Mensaje</label>
                                                    <textarea name="" class="form-control form-control-lg border text-secondary"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-light border">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Juan Azar</td>
                            <td>Peugeot</td>
                            <td>208 HDI 1.6</td>
                            <td>IJH 567</td>
                            <td>Cambio de aceite</td>
                            <td>$ 1500</td>
                            <td class="text-right">
                                <button class="btn btn-outline-light" disabled>
                                    <i class="fas fa-question" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light"  disabled>
                                    <i class="fas fa-wrench" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light">
                                    <i class="fas fa-check" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light" data-toggle="modal" data-target="#modal2">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <div class="modal fade" id="modal2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content text-secondary">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Enviar mensaje al cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <label for="">Mensaje</label>
                                                    <textarea name="" class="form-control form-control-lg border text-secondary"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-light border">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sebastian Soler</td>
                            <td>BMW</td>
                            <td>Serie 2 Cabriolet</td>
                            <td>JKL 456</td>
                            <td>Cambio de filtros</td>
                            <td>$ 3200</td>
                            <td class="text-right">
                                <button class="btn btn-outline-light">
                                    <i class="fas fa-question" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light">
                                    <i class="fas fa-wrench" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light">
                                    <i class="fas fa-check" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light" data-toggle="modal" data-target="#modal3">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content text-secondary">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Enviar mensaje al cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <label for="">Mensaje</label>
                                                    <textarea name="" class="form-control form-control-lg border text-secondary"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-light border">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Adrián solimano</td>
                            <td>Peugeot</td>
                            <td>307 HDI 2.0</td>
                            <td>FUU 123</td>
                            <td>Cambio de pastillas de freno</td>
                            <td>$ 2500</td>
                            <td class="text-right">
                                <button class="btn btn-outline-light" disabled="disabled">
                                    <i class="fas fa-question" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light">
                                    <i class="fas fa-wrench" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light">
                                    <i class="fas fa-check" aria-hidden="true"></i>
                                </button>
                                <button class="btn btn-outline-light" data-toggle="modal" data-target="#modal4">
                                    <i class="fas fa-comments"></i>
                                </button>
                                <div class="modal fade" id="modal4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content text-secondary">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modal1">Enviar mensaje al cliente</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <div class="form-group">
                                                    <label for="">Mensaje</label>
                                                    <textarea name="" class="form-control form-control-lg border text-secondary"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-light border">Enviar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
