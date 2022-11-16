<!-- Vertical Nav -->
<div class="hk-menu">
	<!-- Brand -->
	<div class="menu-header">
		<span>
			<a class="navbar-brand" href="#">
				SINPUS
			</a>
			<button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
				<span class="icon">
					<span class="svg-icon fs-5">
						<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
							<line x1="10" y1="12" x2="20" y2="12"></line>
							<line x1="10" y1="12" x2="14" y2="16"></line>
							<line x1="10" y1="12" x2="14" y2="8"></line>
							<line x1="4" y1="4" x2="4" y2="20"></line>
						</svg>
					</span>
				</span>
			</button>
		</span>
	</div>
	<!-- /Brand -->

	<!-- Main Menu -->
	<div data-simplebar class="nicescroll-bar">
		<div class="menu-content-wrap">
			@if(Auth::user()->id_role === 1)
			<div class="menu-group">
				<ul class="navbar-nav flex-column">
					<li class="nav-item @if($menu == 'Dashboard') active @endif">
						<a class="nav-link" href="/admin">
							<span class="nav-icon-wrap">
								<i data-feather="bar-chart-2"></i>
							</span>
							<span class="nav-link-text">Dashboard</span>
						</a>
					</li>
				</ul>	
			</div>
			<div class="menu-gap"></div>
			<div class="menu-group">
				<div class="nav-header">
					<span>Apps</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item @if($menu == 'Edit Profile') active @endif">
						<a class="nav-link" href="/admin/profil/edit">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-user"></i>
							</span>
							<span class="nav-link-text">Edit Profil</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'Change Password') active @endif">
						<a class="nav-link" href="/admin/change-password">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-unlock-keyhole"></i>
							</span>
							<span class="nav-link-text">Change Password</span>
						</a>
					</li>	
					<li class="nav-item @if($menu == 'Book') active @endif">
						<a class="nav-link" href="/admin/book">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-book-open-reader"></i>
							</span>
							<span class="nav-link-text">Book</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'Category') active @endif">
						<a class="nav-link" href="/admin/category">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-cubes"></i>
							</span>
							<span class="nav-link-text">Kategori</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'Inventory') active @endif">
						<a class="nav-link" href="/admin/inventory">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-book"></i>
							</span>
							<span class="nav-link-text">Ketersediaan</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'Ringkasan') active @endif">
						<a class="nav-link" href="/admin/ringkasan">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-file-pen"></i>
							</span>
							<span class="nav-link-text">Ringkasan</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'Poinku') active @endif">
						<a class="nav-link" href="/admin/poinku">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-feather-pointed"></i>
							</span>
							<span class="nav-link-text">Poinku</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'History') active @endif">
						<a class="nav-link" href="/admin/history">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-clock-rotate-left"></i>
							</span>
							<span class="nav-link-text">History</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="menu-gap"></div>
			<div class="menu-group">
				<div class="nav-header">
					<span>Access</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item @if($menu == 'Account Level') active @endif">
						<a class="nav-link" href="/admin/akses/level">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-users-gear"></i>
							</span>
							<span class="nav-link-text">Account Level</span>
						</a>
					</li>
					<li class="nav-item @if($menu == 'Account Remove') active @endif">
						<a class="nav-link" href="/admin/akses/remove">
							<span class="nav-icon-wrap">
								<i class="fa-solid fa-user-xmark"></i>
							</span>
							<span class="nav-link-text">Remove Account</span>
						</a>
					</li>
				</ul>
			</div>
			@elseif(Auth::user()->id_role === 2)
			<div class="menu-group">
				<div class="nav-header">
					<span>Apps</span>
				</div>
				<ul class="navbar-nav flex-column">
					<li class="nav-item">
						<a class="nav-link" href="/">
							<span class="nav-icon-wrap">
								<i class="material-icons">assessment</i>
							</span>
							<span class="nav-link-text">Home</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/user/profil/edit">
							<span class="nav-icon-wrap">
								<i class="material-icons">account_circle</i>
							</span>
							<span class="nav-link-text">Edit Profil</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/user/change-password">
							<span class="nav-icon-wrap">
								<i class="material-icons">lock</i>
							</span>
							<span class="nav-link-text">Change Password</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/user/poinku">
							<span class="nav-icon-wrap">
								<i class="material-icons">polymer</i>
							</span>
							<span class="nav-link-text">Poinku</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/user/meringkas">
							<span class="nav-icon-wrap">
								<i class="material-icons">edit</i>
							</span>
							<span class="nav-link-text">Meringkas</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/user/history">
							<span class="nav-icon-wrap">
								<i class="material-icons">history</i>
							</span>
							<span class="nav-link-text">History</span>
						</a>
					</li>	
				</ul>
			</div>
			@endif
		</div>
	</div>
	<!-- /Main Menu -->
</div>
<div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
<!-- /Vertical Nav -->