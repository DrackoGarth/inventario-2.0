<?php

include_once 'app\controllers\userController.php';
use app\controllers\userController;
$controller = new userController();

?>
<section class="full-width navLateral scroll" id="navLateral">
	<div class="full-width navLateral-body">
		<div class="full-width navLateral-body-logo has-text-centered tittles is-uppercase">
			SGF
		</div>
		<figure class="full-width" style="height: 77px;">
			<div class="navLateral-body-cl">
				<?php
                    if(is_file("./app/views/fotos/".$_SESSION['foto'])){
                        echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/'.$_SESSION['foto'].'">';
                    }else{
                        echo '<img class="is-rounded img-responsive" src="'.APP_URL.'app/views/fotos/default.png">';
                    }
                ?>
			</div>
			<figcaption class="navLateral-body-cr">
				<span>
					<?php echo $_SESSION['nombre']; ?><br>
					<small><?php echo $_SESSION['usuario']; ?></small>
				</span>
			</figcaption>
		</figure>
		<div class="full-width tittles navLateral-body-tittle-menu has-text-centered is-uppercase">
			<i class="fas fa-th-large fa-fw"></i> &nbsp; <?php echo APP_NAME; ?>
		</div>
		<nav class="full-width">
			<ul class="full-width list-unstyle menu-principal">

				<li class="full-width">
					<a href="<?php echo APP_URL; ?>dashboard/" class="full-width">
						<div class="navLateral-body-cl">
							<i class="fab fa-dashcube fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							Inicio
						</div>
					</a>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-sitemap fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							GERENCIAS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-sitemap fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva Gerencia
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de Gerencias
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>cashierSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar Gerencias
								</div>
							</a>
						</li>
					</ul>
				</li>
			<?php  ?>
			<li class="full-width divider-menu-h"></li>
				<?php //if ($controller->esAdministrador()) {?>
				<li class="full-width"> 
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-users fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							USUARIOS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-user-tie fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo usuario
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de usuarios
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>userSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar usuario
								</div>
							</a>
						</li>
					</ul>
				</li>
				
				<li class="full-width divider-menu-h"></li>
				<?php // }?>
				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-address-book fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							FUNCIONARIOS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-male fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo funcionario
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de funcionario
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>clientSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar funcionario
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-tags fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							CATEGORIAS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-tag fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nueva categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categoryList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de categorías
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>categorySearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar categoría
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cubes fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							PRODUCTOS
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-box fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Nuevo producto
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de productos
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productCategory/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-boxes fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Productos por categoría
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>productSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar producto
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-laptop fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							ASIGNAR
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-laptop-code fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Asignacion de equipos
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleList/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-clipboard-list fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Lista de equipos
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>saleSearch/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-search-dollar fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Buscar equipos
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width">
					<a href="#" class="full-width btn-subMenu">
						<div class="navLateral-body-cl">
							<i class="fas fa-cogs fa-fw"></i>
						</div>
						<div class="navLateral-body-cr">
							CONFIGURACIONES
						</div>
						<span class="fas fa-chevron-down"></span>
					</a>
					<ul class="full-width menu-principal sub-menu-options">
						<li class="full-width">
							<a href="<?php echo APP_URL; ?>companyNew/" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-store-alt fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Datos de empresa
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userUpdate/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-user-tie fa-fw"></i>
								</div>
								<div class="navLateral-body-cr">
									Mi cuenta
								</div>
							</a>
						</li>
						<li class="full-width">
							<a href="<?php echo APP_URL."userPhoto/".$_SESSION['id']."/"; ?>" class="full-width">
								<div class="navLateral-body-cl">
									<i class="fas fa-camera"></i>
								</div>
								<div class="navLateral-body-cr">
									Mi foto
								</div>
							</a>
						</li>
					</ul>
				</li>

				<li class="full-width divider-menu-h"></li>

				<li class="full-width mt-5">
					<a href="<?php echo APP_URL."logOut/"; ?>" class="full-width btn-exit" >
						<div class="navLateral-body-cl">
							<i class="fas fa-power-off"></i>
						</div>
						<div class="navLateral-body-cr">
							Cerrar sesión
						</div>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</section>