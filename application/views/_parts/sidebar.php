		<!-- ========== Left Sidebar Start ========== -->
		
		<div class="vertical-menu">

			<div data-simplebar class="h-100">

				<!--- Sidemenu -->
</style>
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title">Menu</li>

						<?php if ($this->session->userdata('admin')->username === 'admin') { ?>
							<li>
								<a href="<?= site_url('admin/dashboard') ?>" class="waves-effect">
									<i class="dripicons-view-thumb"></i>
									<span>Beranda</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('admin/Wisata') ?>" class="waves-effect">
									<i class="mdi mdi-map-marker-radius-outline mdi-18px"></i>
									<span>Data Tempat Wisata</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('admin/node') ?>" class="waves-effect">
									<i class="mdi mdi-google-maps mdi-18px"></i>
									<span>Node</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('admin/graph') ?>" class="waves-effect">
									<i class="mdi mdi-map-marker-distance mdi-18px"></i>
									<span>Graph</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('admin/user') ?>" class="waves-effect">
									<i class="mdi mdi-account-group-outline mdi-18px"></i>
									<span>Pengguna</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('logout') ?>" class=" waves-effect">
									<i class="dripicons-exit"></i>
									<span>Logout</span>
								</a>
							</li>
						<?php }else { ?>
							
							<li>
								<a href="<?= site_url('Wisata') ?>" class="waves-effect">
									<i class="mdi mdi-map-marker-radius-outline mdi-18px"></i>
									<span>Daftar Tempat Wisata</span>
								</a>
							<li>
								<a href="<?= site_url('galeri') ?>" class="waves-effect">
									<i class="mdi mdi-image-multiple-outline mdi-18px"></i>
									<span>Galeri</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('djikstra') ?>" class="waves-effect">
									<i class="mdi mdi-map-marker-path mdi-18px"></i>
									<span>Pencarian Rute</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('about') ?>" class="waves-effect">
									<i class="mdi mdi-information-outline mdi-18px"></i>
									<span>Tentang Aplikasi</span>
								</a>
							</li>
							<li>
								<a href="<?= site_url('login') ?>" class="waves-effect">
								<i class="mdi mdi-account-circle-outline font-size-20 align-middle me-1"></i>
									<span>Login Admin</span>
								</a>
							</li>
							
							<!-- <li>
								<a href="<?= site_url('login') ?>" class=" waves-effect">
									<i class="mdi mdi-18 mdi-login"></i>
									<span>Login</span>
								</a>
							</li> -->
						<?php } ?>

					</ul>
				</div>
				<!-- Sidebar -->
			</div>
		</div>
		<!-- Left Sidebar End -->
