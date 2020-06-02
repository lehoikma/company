jQuery(document).ready( function($){
	$("#content-home .product-home").slick({
		arrows: true,
		infinite: true,
		dots: true,
		speed: 600,
		autoplay: true,
		autoplaySpeed: 5000,
		slidesToShow: 3,
		slidesToScroll: 3,
		prevArrow: false,
    	nextArrow: false,
		responsive: [
		{
			breakpoint: 961,
			settings: {
			slidesToShow: 3,
			slidesToScroll: 2,
			}
		},
		{
			breakpoint: 668,
			settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			}
		},
		{
			breakpoint: 500,
			settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			}
		}
		]
	});

// giai thuong

	// $("#giai-thuong .box-prize").slick({
	// 	arrows: true,
	// 	infinite: true,
	// 	dots: false,
	// 	speed: 600,
	// 	autoplay: true,
	// 	autoplaySpeed: 5000,
	// 	slidesToShow: 5,
	// 	slidesToScroll: 1,
	// 	responsive: [
	// 	{
	// 		breakpoint: 961,
	// 		settings: {
	// 		slidesToShow: 5,
	// 		slidesToScroll: 2,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 861,
	// 		settings: {
	// 		slidesToShow: 4,
	// 		slidesToScroll: 1,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 769,
	// 		settings: {
	// 		slidesToShow: 3,
	// 		slidesToScroll: 1,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 569,
	// 		settings: {
	// 		slidesToShow: 2,
	// 		slidesToScroll: 1,
	// 		}
	// 	}
	// 	]
	// });

// sản phẩm khác

	// $("#sliderProducts").slick({
	// 	arrows: true,
	// 	infinite: true,
	// 	dots: false,
	// 	speed: 600,
	// 	autoplay: true,
	// 	autoplaySpeed: 5000,
	// 	slidesToShow: 4,
	// 	slidesToScroll: 1,
	// 	responsive: [
	// 	{
	// 		breakpoint: 961,
	// 		settings: {
	// 		slidesToShow: 4,
	// 		slidesToScroll: 2,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 861,
	// 		settings: {
	// 		slidesToShow: 4,
	// 		slidesToScroll: 1,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 769,
	// 		settings: {
	// 		slidesToShow: 3,
	// 		slidesToScroll: 1,
	// 		}
	// 	},
	// 	{
	// 		breakpoint: 569,
	// 		settings: {
	// 		slidesToShow: 2,
	// 		slidesToScroll: 1,
	// 		}
	// 	}
	// 	]
	// });

});

