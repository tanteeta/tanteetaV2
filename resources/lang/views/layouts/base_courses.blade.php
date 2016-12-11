@show
	@include("layouts.head")
	@include("layouts.white_header")
		@yield("content")

	@include("layouts.footer")
	@include("layouts.tail")