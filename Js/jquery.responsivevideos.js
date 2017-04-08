$(document).ready(function(){
	$(window).height();
	var a = $(window).width(), b = $("#navigation").outerHeight();
	$(window).resize(function(){
		a = $(window).width();
		$(window).height()
	});
	$(window).trigger("scroll");
	$("#navigation").fixedonlater({speedDown: 250, speedUp: 100});
	$(".centralized").centralized({delay: 1500, fadeSpeed: 500});
	$.fn.responsivevideos();
	$("#quote-slider").each(function(){
		$(".item", this).length && $(this).carousel({interval: 2E4})
	});
	$("#main-menu").onePageNav({currentClass: "active", changeHash: !1, scrollOffset: b - 10, scrollThreshold: 0.5, scrollSpeed: 750, filter: "", easing: "swing"});
	980 < a && ($("#page-welcome").parallax("0%", 0.2), $("#page-features").parallax("0%", 0.07), $("#page-twitter").parallax("0%", 0.1));
	"undefined" != typeof window.ontouchstart && $.each([".social-icons a", ".portfolio-items li", ".about-items .item"], function(a, b){
		$(b).each(function(b, a){
			$(a).bind("click", function(a){
				$(this).hasClass("clickInNext") ? $(this).removeClass("clickInNext") : (a.preventDefault(), a.stopPropagation(), $(this).mouseover(), $(this).addClass("clickInNext"))
			})
		})
	});
	$("#page-welcome .logo a").click(function(){
		$("html, body").animate({scrollTop: $($.attr(this, "href")).offset().top - b + 4}, 800);
		setTimeout(function(){
			$(window).trigger("scroll")
		}, 900);
		return!1
	});
	$("#welcome-messages ul").bxSlider({mode: "vertical", auto: !0, minSlides: 1, responsive: !0, touchEnabled: !0, pager: !1, controls: !1, useCSS: !1, pause: 1E4});
	$(".plugin-filter").click(function(){
		return!1
	});
	$(".plugin-filter-elements").mixitup({targetSelector: ".mix", filterSelector: ".plugin-filter", sortSelector: ".sort", buttonEvent: "click", effects: ["fade", "rotateY"], listEffects: null, easing: "smooth", layoutMode: "grid", targetDisplayGrid: "inline-block", targetDisplayList: "block", gridClass: "", listClass: "", transitionSpeed: 600, showOnLoad: "all", sortOnLoad: !1, multiFilter: !1, filterLogic: "or", resizeContainer: !0, minHeight: 0, failClass: "fail", perspectiveDistance: "3000", perspectiveOrigin: "50% 50%", animateGridList: !0, onMixLoad: null, onMixStart: null, onMixEnd: null})
});