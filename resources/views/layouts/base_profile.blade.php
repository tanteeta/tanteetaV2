@show
	@include("layouts.head")
	@include("layouts.profile_header")
		@yield("content")

	@include("layouts.footer")
	@include("layouts.tail")