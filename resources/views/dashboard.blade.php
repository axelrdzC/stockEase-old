<div class="row align-items-center pb-3">
    <div class="col-sm-3 col-lg-3">
        <div class="fs-2 fw-semibold">Dashboard</div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-5 ms-auto">
        <form class="d-flex" role="search">
            <div class="input-group me-3"> 
                <input class="form-control border-secondary p-1 px-2 bg-white" type="search" placeholder="Busca algun producto, orden, proveedor, etc." aria-label="Search">
                <button class="btn border border-secondary p-1 px-2 bg-white" type="button">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->

<div class="row">
    <div class="col">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="fs-5 fw-semibold">Gráfico de ventas</div>
                    </div>
                    <div class="col" id="botones">
                        <button type="button" data-bs-toggle="button" class="btn btn-primary text-nowrap p-1 px-2 me-1 fw-medium" onclick="selectButton(this)">ESTE MES</button>
                        <button type="button" data-bs-toggle="button" class="btn btn-primary text-nowrap p-1 px-2 me-1 fw-medium" onclick="selectButton(this)">ESTE AÑO</button>
                        <button type="button" data-bs-toggle="button" class="btn btn-primary text-nowrap p-1 px-2 me-1 fw-medium" onclick="selectButton(this)">DESDE EL PRINCIPIO</button>            
                    </div>
                </div>
                <div class="mt-3">
                    <div class="border border-dashed p-3">
                        <div class="row align-items-end" style="height: 200px;">
                            <div class="col text-center">
                                <div class="bg-primary" style="height: 60%; width: 50%; margin: 0 auto;">Enero</div>
                            </div>
                            <div class="col text-center">
                                <div class="bg-success" style="height: 80%; width: 50%; margin: 0 auto;">Febrero</div>
                            </div>
                            <div class="col text-center">
                                <div class="bg-warning" style="height: 40%; width: 50%; margin: 0 auto;">Marzo</div>
                            </div>
                            <div class="col text-center">
                                <div class="bg-danger" style="height: 70%; width: 50%; margin: 0 auto;">Abril</div>
                            </div>
                            <div class="col text-center">
                                <div class="bg-info" style="height: 90%; width: 50%; margin: 0 auto;">Mayo</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->

<div class="row">
    <div class="col-sm-6 col-lg-5">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-5">
                        <div class="fs-5 fw-semibold">Mis almacenes</div>
                    </div>
                    <div class="col text-end">
                    <a href="#" class="fw-bold enlace">Ver todos ></a>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- /.col-->
    <div class="col-sm-6 col-lg-7">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-2">
                        <div class="fs-5 fw-semibold">Productos</div>
                    </div>
                    <div class="col" id="botones">
                        <button type="button" data-bs-toggle="button" class="btn btn-primary text-nowrap p-1 px-2 me-1 fw-medium fs-6" onclick="selectButton(this)">MAS VENDIDOS</button>     
                        <button type="button" data-bs-toggle="button" class="btn btn-primary text-nowrap p-1 px-2 me-1 fw-medium" onclick="selectButton(this)">MENOS VENDIDOS</button>
                        <button type="button" data-bs-toggle="button" class="btn btn-primary text-nowrap p-1 px-2 me-1 fw-medium" onclick="selectButton(this)">NIVEL BAJO DE STOCK</button>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- /.col-->
</div>
<!-- /.row-->

<script>
    function selectButton(button) {
        // Obtener todos los botones del grupo
        const buttons = document.querySelectorAll('#botones button');

        // Desmarcar todos los botones
        buttons.forEach(btn => {
            btn.classList.remove('active'); // Eliminar la clase 'active' de Bootstrap
        });

        // Marcar el botón seleccionado
        button.classList.add('active'); // Agregar la clase 'active' al botón seleccionado
    }
</script>