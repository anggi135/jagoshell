@extends('layouts.default')

@section('content')

@endsection

@push('scripts')
<script>
	function carouselReview(){
		/*  testimonial one function by = owl.carousel.js */
		function checkDirection() {
			var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
			if(htmlClassName == 'rtl') {
				return true;
			} else {
				return false;
			
			}
		}
		
		jQuery('.testimonial-one').owlCarousel({
			loop:true,
			autoplay:true,
			margin:30,
			nav:false,
			dots: false,
			rtl: checkDirection(),
			left:true,
			navText: ['', ''],
			responsive:{
				0:{
					items:1
				},			
				1200:{
					items:2
				},
				1600:{
					items:3
				}
			}
		})			
	}
	jQuery(window).on('load',function(){
		setTimeout(function(){
			carouselReview();
		}, 1000); 
	});
</script>
@endpush