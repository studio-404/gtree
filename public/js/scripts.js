$(document).ready(function(){
	website.mobileNav();
	slider.bootstrap();
});

$(document).on("change", ".selector", function(){
	var selectbox = $(this).attr("data-selectbox"); 
	var val = $(this).val();
	website.dropdown(selectbox, val);
});



var website = {
	name: "Tree",
	home: "http://404.ge",
	publicFolder: "http://404.ge/public/",
	ajax: "http://404.ge/index.php",
	checkboxCheck: function(th){
		th = typeof th !== 'undefined' ? th : '';
		if($("#" + th).hasClass("active")){
			$("#" + th).removeClass("active");
		}else{
			$("#" + th).addClass("active");
		}
	},
	checkboxCheckRounded: function(main, th){
		main = typeof main !== 'undefined' ? main : '';
		th = typeof th !== 'undefined' ? th : '';
		$("."+main).removeClass("active"); 
		$("#" + th).addClass("active");
	},
	mobileNav: function(){
		var list = $("header section .desktop ul").html();
		$("header section .mobile ul").html(list);
		var t = $("header section .mobile ul .home a").attr("data-title");
		$("header section .mobile ul .home a").html(t);
		$("header section .mobile ul").append("<li class=\"line\"></li>");
		var list2 = $("section .navigation ul").html();
		$("header section .mobile ul").append(list2);
	},
	mobileNavClick: function(){
		var s = $("header section .mobile").attr("data-status");
		if(s == "closed"){
			$("header .top-nav .mobile ul").slideDown("slow"); 
			$("header section .mobile").attr("data-status","opend");
			$("header .top-nav .mobile p i").removeClass("fa-bars").addClass("fa-times");
		}else{
			$("header .top-nav .mobile ul").slideUp("slow"); 
			$("header section .mobile").attr("data-status","closed");
			$("header .top-nav .mobile p i").removeClass("fa-times").addClass("fa-bars");
		}
	}, 
	popup: function(s){
		s = typeof s !== 'undefined' ? s : '';
		if(s=="close"){
			$(".popup").css("display","none");
			$(".mask").css("display","none");
		}else{
			$(".popup").css("display","block");
			$(".mask").css("display","block");
			var myLatLng = { lat: 41.689747753270375, lng: 44.79520250251619 };
			var map = new google.maps.Map(document.getElementById('addMapCordinates'), 
			{
				center: myLatLng,
				zoom: 14
			});	
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				icon: website.publicFolder + "img/icon.png", 
				draggable:true
			});
			google.maps.event.addListener(marker, 'click', function (event) {
			    document.getElementById("lat").value = "lat: "+this.getPosition().lat();
			    document.getElementById("lng").value = "lng: "+this.getPosition().lng();
			});

	        google.maps.event.addListener(marker, 'drag', function (event) {
				document.getElementById("lat").value = "lat: "+this.getPosition().lat();
			    document.getElementById("lng").value = "lng: "+this.getPosition().lng();
			});

	        google.maps.event.addListener(marker, 'dragend', function (event) {
				document.getElementById("lat").value = "lat: "+this.getPosition().lat();
			    document.getElementById("lng").value = "lng: "+this.getPosition().lng();
			});
		}
	}, 
	dropdown: function(m,v){
		$("#"+m+" .selected span").text(v);
	},
	mapInitialize: function(marker_points){
		var offsetHeight = $(window).height();
		$("#map").css("height", offsetHeight+"px"); 
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 12,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		var infoWindow = new google.maps.InfoWindow(), bounds = new google.maps.LatLngBounds(), position, marker;
		for (i = 0; i < marker_points.length; i++) {
			position = new google.maps.LatLng(marker_points[i][0], marker_points[i][1]);
			marker = new google.maps.Marker({
		    	position: position,
		    	map: map,
		    	icon: marker_points[i][3]
		  	});
			bounds.extend(position);

	        google.maps.event.addListener(marker, 'click', (function(marker, i) {
	            return function() {
	                infoWindow.close();
	                infoWindow.setContent(marker_points[i][2]);
	                infoWindow.open(map, marker);
	            }
	        })(marker, i));
	        map.fitBounds(bounds);
		};

		google.maps.event.addListener(map, 'click', function() {
		    	infoWindow.close();
		});

		google.maps.event.addListener(infoWindow, 'domready', function() {
		    var iwOuter = $('.gm-style-iw');
			var iwBackground = iwOuter.prev();

		    iwBackground.children(':nth-child(2)').css({'display' : 'none'});
			iwBackground.children(':nth-child(4)').css({'display' : 'none'});
			iwOuter.parent().parent().css({left: '115px'});
			iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
			iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});
			iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});
			var iwCloseBtn = iwOuter.next();
			iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #e57373', 'border-radius': '0', 'box-shadow': '0 0 5px #e57373'});
			if($('.iw-content').height() < 140){
		      $('.iw-bottom-gradient').css({display: 'none'});
		    }
			iwCloseBtn.mouseout(function(){
				$(this).css({opacity: '1'});
			});
		});
	}
}

var slider = {
	container: "main .product-view .product-image",
	imageItem: "main .product-view .product-image .img .img-item",
	prevButton: "main .product-view .product-image .img ul .prev",
	nextButton: "main .product-view .product-image .img ul .next",
	currentPos: 0, 
	info: function(){ 
		return this.container + " .img ul .info";
	}, 
	bootstrap: function(){
		var c = this.imageCount();
		var i = this.info();
		console.log(i); 
		$(i).html("<i class=\"fa fa-camera\" aria-hidden=\"true\"></i> <span>1 - "+c+"</span>"); 
	},
	next: function(n){
		n = typeof n !== 'undefined' ? n : 1;
		var i = this.info();
		if(n>=(this.imageCount() - 1)){
			this.currentPos = 0;
		}else{
			this.currentPos = n + 1;
		}
		$(this.imageItem).removeClass("active");
		$(this.imageItem).eq(this.currentPos).addClass("active");
		$(this.prevButton).attr("onclick","slider.prev("+this.currentPos+")");
		$(this.nextButton).attr("onclick","slider.next("+this.currentPos+")");
		$(i).html("<i class=\"fa fa-camera\" aria-hidden=\"true\"></i> <span>"+(this.currentPos + 1)+" - "+this.imageCount()+"</span>"); 
	},
	prev: function(n){
		n = typeof n !== 'undefined' ? n : 1;
		var i = this.info();
		if(n <= 0){
			this.currentPos = (this.imageCount() - 1);
		}else{
			this.currentPos = n - 1;
		}
		$(this.imageItem).removeClass("active");
		$(this.imageItem).eq(this.currentPos).addClass("active");
		$(this.prevButton).attr("onclick","slider.prev("+this.currentPos+")");
		$(this.nextButton).attr("onclick","slider.next("+this.currentPos+")");
		$(i).html("<i class=\"fa fa-camera\" aria-hidden=\"true\"></i> <span>"+(this.currentPos + 1)+" - "+this.imageCount()+"</span>"); 
	},
	imageCount: function(){
		var c = $(this.imageItem).length;
		return c;
	}
}