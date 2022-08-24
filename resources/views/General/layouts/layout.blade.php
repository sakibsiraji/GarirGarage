<!DOCTYPE html>
<html>
	@include('General.parts.head')
	<body>
    <div class="body">
			<div class="notice-top-bar bg-primary" data-sticky-start-at="100">
				<button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>
				<div class="container">
					<div class="row justify-content-center py-2">
						<div class="col-9 col-md-12 text-center">
							<p class="text-color-light mb-0"><strong>DEAL OF THE WEEK</strong> - Free Diagnosis & Break Checks - <strong><a href="#" class="text-color-light text-decoration-none custom-text-underline-1">Make an Appointment</a></strong></p>
						</div>
					</div>
				</div>
			</div>
			@include('General.parts.header')
      <div role="main" class="main">
				@yield('content')
			</div>
			@include('General.parts.footer')
		</div>
		@include('General.parts.script')
	</body>
</html>
