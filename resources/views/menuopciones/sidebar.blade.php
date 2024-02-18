<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a @click="menu=1" href="#" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>FARMARTEZANO</h3>
                </a>
                <div class="navbar-nav w-100">
                    <a @click="menu=0" href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>ESCRITORIO</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>ALMACÉN</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a @click="menu=1" href="#" class="dropdown-item">CATEGORÍA</a>
                            <a @click="menu=2" href="#" class="dropdown-item">PRODUCTO</a>
                        </div>
                    </div>
                    <a @click="menu=3" href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>INGRESOS</a>
                    <a @click="menu=4" href="#" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>VENTAS</a>
                    <a @click="menu=5" href="#" class="nav-item nav-link"><i class="fa fa-table me-2"></i>CLIENTES</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-file-alt me-2"></i>ACCESOS</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a @click="menu=6" href="#" class="dropdown-item">USUARIOS</a>
                            <a @click="menu=7" href="#" class="dropdown-item">ROLES</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>REPORTES</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a @click="menu=8" href="#" class="dropdown-item">R. INGRESOS</a>
                            <a @click="menu=9" href="#" class="dropdown-item">R.VENTAS</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
