// jQuery(document).ready(function(){
//     jQuery(".carousel-testimony1").owlCarousel({
//       loop:true,
//       margin:0,
//       responsiveClass:true,
//       autoplay:true,
//       responsive:{
//           0:{
//               items:1,
//               nav:true
//           },
//           600:{
//               items:1,
//               nav:false
//           },
//           1000:{
//               items:1,
//               nav:true,
//               loop:false
//           }
//       }
//     });
//   });
jQuery(document).ready(function(){
jQuery('.carousel-testimony1').owlCarousel({
    center: true,
    loop: true,
    items:1,
    margin: 30,
    stagePadding: 0,
    nav: true,
    navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
    responsive:{
        0:{
            items: 1
        },
        600:{
            items: 1
        },
        1000:{
            items: 1
        }
    }
});
});
carousel();


	// loader
	var loader = function() {
		setTimeout(function() { 
			if(jQuery('#ftco-loader').length > 0) {
				jQuery('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

// jQuery(document).ready(function(){
//     jQuery(".carousel-testimony1").owlCarousel({
//         center: true,
//         loop: true,
//         items:1,
//         margin: 30,
//         stagePadding: 0,
//         nav: true,
//         navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
//         responsive:{
//             0:{
//                 items: 1
//             },
//             600:{
//                 items: 1
//             },
//             1000:{
//                 items: 1
//             }
//         }
//     });
//   });

