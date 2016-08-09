<section id="map"></section>
<script type="text/javascript">
var offsetHeight = $(window).height();
$("#map").css("height",offsetHeight+"px"); 


var center = new google.maps.LatLng(41.72303632446153, 44.80065275123445);

function initialize() {
	var mapOptions = {
		center: center,
		zoom: 12,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"),mapOptions);


	var factory = new google.maps.LatLng(41.72303632446153, 44.80065275123445);
	
	var content = '<div id="iw-container">' +
				'<div class="iw-title">ფორდი 320 ძალიან იაფად</div>' +
				'<div class="iw-content">' +
				'<img src="https://www.enterprise.com/content/dam/global-vehicle-images/cars/FORD_FOCU_2012-1.png" alt="Porcelain Factory of Vista Alegre" width="150" />' +
				'<div class="iw-subTitle">35 000 GEL</div>' +
				'<p>იაპონური იდიალურ მდგომარეობაში...იაპონური იდიალურ მდგომარეობაში იაპონური იდიალურ მდგომარეობაში იაპონური იდიალურ მდგომარეობაში <br /><a href="http://404.ge/view/5151515">ნახვა</a></p>' +
				'<div class="iw-subTitle">'+
				'<i class="fa fa-star" aria-hidden="true" title="1 ვარსკვლავი"></i><i class="fa fa-star" aria-hidden="true" title="2 ვარსკვლავი"></i><i class="fa fa-star" aria-hidden="true" title="3 ვარსკვლავი"></i><i class="fa fa-star-half-o" aria-hidden="true" title="4 ვარსკვლავი"></i><i class="fa fa-star-o" aria-hidden="true" title="5 ვარსკვლავი"></i>'
				+'</div>' +
				'</div>' +
				'<div class="iw-bottom-gradient"></div>' +
				'</div>';
	
	var infowindow = new google.maps.InfoWindow({
    	content: content,
		maxWidth: 350
	});
	var marker = new google.maps.Marker({
    	position: factory,
    	map: map,
    	icon: website.publicFolder + "img/icon3.png"
  	});

	google.maps.event.addListener(marker, 'click', function() {
    	infowindow.open(map, marker);
 	});

	google.maps.event.addListener(map, 'click', function() {
    	infowindow.close();
  	});
	
	google.maps.event.addListener(infowindow, 'domready', function() {
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
google.maps.event.addDomListener(window, 'load', initialize);	
</script>