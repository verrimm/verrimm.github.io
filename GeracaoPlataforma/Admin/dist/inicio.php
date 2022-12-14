@@include("partials/main.html")

<head>

    @@include("partials/title-meta.html", {"title": "Dashboard"})

    @@include("partials/head-css.html")

    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/libs/@chenfengyuan/datepicker/datepicker.min.css">

</head>

@@include("partials/body.html")

<!-- Begin page -->
<div id="layout-wrapper">

    @@include("partials/menu.html")

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                @@include("partials/page-title.html", {"pagetitle": "Superação", "title": "Dashboard"})

                <div class="row">
                    <div class="col-xl-12">
                        <div class="row" style="justify-content: flex-end;">
                            <div class="col-md-6">
                                <form action="">
                                    <div class="mb-3">
                                        <select class="form-control select2">
                                            <option>Filtro</option>
                                            <optgroup label="Grupo 0">
                                                <option value="AK">Agência 1</option>
                                                <option value="HI">Agência 2</option>
                                            </optgroup>
                                            <optgroup label="Grupo 1">
                                                <option value="CA">Agência 3</option>
                                                <option value="NV">Agência 4</option>
                                                <option value="OR">Agência 5</option>
                                                <option value="WA">Agência 6</option>
                                            </optgroup>
                                            <optgroup label="Grupo 2">
                                                <option value="AZ">Agência 7</option>
                                                <option value="CO">Agência 8</option>
                                                <option value="ID">Agência 9</option>
                                                <option value="MT">Agência 10</option>
                                                <option value="NE">Agência 11</option>
                                            </optgroup>
                                            <optgroup label="Grupo 3">
                                                <option value="AL">Agência 12</option>
                                                <option value="AR">Agência 13</option>
                                                <option value="IL">Agência 14</option>
                                                <option value="IA">Agência 15</option>
                                                <option value="KS">Agência 16</option>
                                            </optgroup>
                                            <optgroup label="Grupo 4">
                                                <option value="CT">Agência 17</option>
                                                <option value="DE">Agência 18</option>
                                                <option value="FL">Agência 19</option>
                                                <option value="GA">Agência 20</option>
                                                <option value="IN">Agência 21</option>
                                                <option value="ME">Agência 22</option>
                                                <option value="MD">Agência 23</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-10">
                                            <input class="form-control" type="month" value="<?php echo date('F, Y') ?>" id="filtroMes">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="card border border-primary mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="badge bg-primary" style="font-size: 100%;">Grupo 5</p>
                                                <h4 class="mb-0">Unicred Central RS</h4>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="badge bg-primary" style="font-size: 100%;">Pontuação <span class="fas fa-trophy"></span></p>
                                                <h4 class="mb-0">677</h4>
                                                <h5 class="font-size-10 mb-0">/127 pontos do 3º lugar</h5>
                                            </div>
                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-warning avatarRanking">5º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row" style="justify-content: flex-end;">
                            <div class="col-md-3">
                                <a href="creditopf.html">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Crédito PF</p>
                                                    <h4 class="mb-0">R$19.352.171</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-success avatarRanking">1º</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="creditopj.html">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">Crédito PJ</p>
                                                    <h4 class="mb-0">R$5.301.170</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center ">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="dap+fundospf.html">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">DAP + Fundos PF</p>
                                                    <h4 class="mb-0">52,67%</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-success avatarRanking">1º</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="dap+fundospf.html">
                                    <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <p class="text-muted fw-medium">DAP + Fundos PJ</p>
                                                    <h4 class="mb-0">R$14.693.380</h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center ">
                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                        <span class="avatar-title rounded-circle bg-warning avatarRanking">4º</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row" style="justify-content: flex-end;">
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Stress PF</p>
                                                <h4 class="mb-0">R$21.003.829</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-success avatarRanking">2º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Stress PJ</p>
                                                <h4 class="mb-0">R$3.960.828</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">7º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Rec. de Prod e Serv / Total</p>
                                                <h4 class="mb-0">R$1.678.495</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">9º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Resultado Total %</p>
                                                <h4 class="mb-0">52,67%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-warning avatarRanking">5º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row" style="justify-content: flex-end;">
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Resultado Total Vol. %</p>
                                                <h4 class="mb-0">34,20%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-success avatarRanking">2º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Fidelização PF %</p>
                                                <h4 class="mb-0">33%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Fidelização PJ %</p>
                                                <h4 class="mb-0">52,67%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">7º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Crédito Fidelização</p>
                                                <h4 class="mb-0">23,36%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" style="justify-content: flex-start;">
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Resultado Total Vol. %</p>
                                                <h4 class="mb-0">34,20%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-success avatarRanking">2º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Fidelização PF %</p>
                                                <h4 class="mb-0">33%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center ">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">6º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-muted fw-medium">Fidelização PJ %</p>
                                                <h4 class="mb-0">52,67%</h4>
                                            </div>

                                            <div class="flex-shrink-0 align-self-center">
                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                    <span class="avatar-title rounded-circle bg-danger avatarRanking">7º</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end row -->

                    @@include("partials/grafico.html")
                </div>
                <!-- end row -->
                <div class="row">

                    @@include("partials/ranking.html")

                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!-- subscribeModal -->
    @@include("partials/modal.html")
    <!-- end modal -->

    @@include("partials/footer.html")
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

@@include("partials/right-sidebar.html")

@@include("partials/vendor-scripts.html")

<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
<script src="assets/libs/@chenfengyuan/datepicker/datepicker.min.js"></script>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- form advanced init -->
<script src="assets/js/pages/form-advanced.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>
</body>

</html>