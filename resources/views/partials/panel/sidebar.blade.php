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
					<li class="nav-item active">
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
					<li class="nav-item">
						<a class="nav-link" href="#">
							<span class="nav-icon-wrap">
								<i class="material-icons">account_circle</i>
							</span>
							<span class="nav-link-text">Profile</span>
						</a>
					</li>	
					<!-- <li class="nav-item">
						<a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dash_chat">
							<span class="nav-icon-wrap">
								<span class="svg-icon">
									<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-message-dots" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
										<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
										<path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
										<line x1="12" y1="11" x2="12" y2="11.01" />
										<line x1="8" y1="11" x2="8" y2="11.01" />
										<line x1="16" y1="11" x2="16" y2="11.01" />
									</svg>
								</span>
							</span>
							<span class="nav-link-text">Chat</span>
						</a>
						<ul id="dash_chat" class="nav flex-column collapse  nav-children">
							<li class="nav-item">
								<ul class="nav flex-column">
									<li class="nav-item">
										<a class="nav-link" href="chats.html"><span class="nav-link-text">Chats</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="chats-group.html"><span class="nav-link-text">Groups</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="chats-contact.html"><span class="nav-link-text">Contacts</span></a>
									</li>
								</ul>	
							</li>	
						</ul>	
					</li> -->
				</ul>
			</div>
			<div class="menu-gap"></div>
			@elseif(Auth::user()->id_role === 2)
			<div class="menu-group">
				<div class="nav-header">
					<span>Apps</span>
				</div>
				<ul class="navbar-nav flex-column">
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
								<i class="material-icons">account_circle</i>
							</span>
							<span class="nav-link-text">Change Password</span>
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