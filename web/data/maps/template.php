<div class="row">
	<div class="col-sm-12" align="center">
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAw_5gDKl_43STzOtkGb9KvtEGZgQ3fQSQ'></script><div style='overflow:hidden;height:100%;width:100%;'><div id='gmap_canvas' style='height:40vw;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div>	<script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(<?php echo $maps;?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?php echo $maps;?>)});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	</div>
</div>