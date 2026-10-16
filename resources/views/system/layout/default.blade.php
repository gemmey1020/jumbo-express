<!DOCTYPE html>
<html data-bs-theme="dark" lang="{{ app()->getLocale() }}"{{ (!empty($htmlAttribute)) ? $htmlAttribute : '' }}>
<head>
	@include('system.partial.head')
</head>
<body class="{{ (!empty($bodyClass)) ? $bodyClass : '' }}">
	<!-- BEGIN #app -->
	<div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}">
	  @includeWhen(empty($appHeaderHide), 'system.partial.header')
		@includeWhen(empty($appSidebarHide), 'system.partial.sidebar')
		@includeWhen(!empty($appTopNav), 'system.partial.top-nav')

		@if (empty($appContentHide))
			<!-- BEGIN #content -->
			<div id="content" class="app-content  {{ (!empty($appContentClass)) ? $appContentClass : '' }}">
				@yield('content')
			</div>
			<!-- END #content -->
		@else
    	@yield('content')
		@endif

		@includeWhen(!empty($appFooter), 'partial.footer')
	</div>
	<!-- END #app -->

	@yield('outter_content')
	@include('system.partial.scroll-top-btn')
	@include('system.partial.theme-panel')
	@include('system.partial.scripts')
</body>
</html>
