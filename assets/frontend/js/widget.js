(function ($) {

    "use strict";


    


    //Creative Button
		var Quik_Theme_Creative_Button = function($scope) {

			var btn_wrap = $scope.find('.quiktheme-creative-btn-wrap');
			var magnetic = btn_wrap.data('magnetic');
			var btn = btn_wrap.find('a.quiktheme-creative-btn');
			if( 'yes' == magnetic ){
				btn_wrap.on('mousemove', function(e) {
					var x = e.pageX - ( btn_wrap.offset().left + ( btn_wrap.outerWidth() / 2 ) );
					var y = e.pageY - ( btn_wrap.offset().top + ( btn_wrap.outerHeight() / 2 ) );
					btn.css("transform", "translate(" + x * 0.3 + "px, " + y * 0.5 + "px)");
				});
				btn_wrap.on('mouseout', function(e){
					btn.css("transform", "translate(0px, 0px)");
				});
			}
			//For expandable button style only
			var expandable = $scope.find('.quiktheme-eft--expandable');
			var text = expandable.find('.text');
			if ( expandable.length > 0 && text.length > 0 ) {
				text[0].addEventListener("transitionend", function () {
					if (text[0].style.width) {
						text[0].style.width = "auto";
					}
				});
				expandable[0].addEventListener("mouseenter", function (e) {
					e.currentTarget.classList.add('hover');
					text[0].style.width = "auto";
					var predicted_answer = text[0].offsetWidth;
					text[0].style.width = "0";
					window.getComputedStyle(text[0]).transform;
					text[0].style.width = "".concat(predicted_answer, "px");

				});
				expandable[0].addEventListener("mouseleave", function (e) {
					e.currentTarget.classList.remove('hover');
					text[0].style.width = "".concat(text[0].offsetWidth, "px");
					window.getComputedStyle(text[0]).transform;
					text[0].style.width = "";
				});
			}
		};

        




     // Make sure you run this code under Elementor..
        $(window).on('elementor/frontend/init', function () {
            elementorFrontend.hooks.addAction('frontend/element_ready/quiktheme-creative-button.default', Quik_Theme_Creative_Button);
        });

    })(jQuery);