<div class="deznav">
    <div class="deznav-scroll">
		<ul class="metismenu" id="menu">
			<li class="menu-title">YOUR COMPANY</li>
			<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
				<div class="menu-icon">
					<i class="bi bi-grid-fill fs-4 px-2"></i>
				</div>	
				<span class="nav-text">Dashboard</span>
				</a>
				<ul aria-expanded="false">
					<li><a href="index-3.html">Dashboard </a></li>
				</ul>
			</li>
			<li><a href="{{ route('admin.category') }}" class="" aria-expanded="false">
				<div class="menu-icon">
					<i class="bi bi-diagram-2-fill fs-3 px-1"></i>
				</div>	
					<span class="nav-text">Category</span>
				</a>
			</li> 
			<li>
				<a href="{{ route('admin.product')}}" class="" aria-expanded="false">
					<div class="menu-icon align-middle">
						<i class="bi bi-nut-fill fs-4 px-2"></i>
					</div>	
					<span class="nav-text">Product</span>
				</a>
			</li> 
			<li>
				<a href="{{ route('admin.order')}}" class="" aria-expanded="false">
					<div class="menu-icon align-middle">
						<i class="bi bi-clock-history fs-4 px-2"></i>
					</div>	
					<span class="nav-text">Orders</span>
				</a>
			</li> 
		</ul>
	</div>
</div>