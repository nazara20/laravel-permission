	<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Admin Online Company</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

						<li class="sidebar-item {{ (request()->routeIs('admin.dashboard')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('admin.dashboard') }}">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
@can('show employee')
					<li class="sidebar-item {{ (request()->routeIs('admin.employee')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('admin.employee') }}">
              <i class="align-middle" data-feather="user"></i> <span class="align-middle">Karyawan</span>
            </a>
        </li>
        @endcan
        @can('show present')
		<li class="sidebar-item {{ (request()->routeIs('admin.present')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('admin.present') }}">
              <i class="align-middle" data-feather="clock"></i> <span class="align-middle">Absen</span>
            </a>
        </li>
        @endcan
        @can('show salary')
		<li class="sidebar-item {{ (request()->routeIs('admin.salary')) ? 'active' : '' }}">
						<a class="sidebar-link" href="{{ route('admin.salary') }}">
              <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Gaji</span>
            </a>
        </li>
        @endcan
				</ul>

				
			</div>
		</nav>