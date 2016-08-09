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