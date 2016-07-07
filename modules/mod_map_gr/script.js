var modMapGr = {
    handler: function(json) {
		ymaps.ready(init);
        
		function init(){ 							
            mapGr = new ymaps.Map("page_map_gr"+json.id, {
				center: [json.mapx, json.mapy],
				zoom: json.mapzoom,
			}); 	
            
            json.markers.forEach(function(marker, i) {
                 var mapPlacemark = new ymaps.Placemark([marker.markerx,marker.markery], {}, {
                    iconLayout: 'default#image',
                    iconImageSize: [20, 30],
                    iconImageOffset: [-10, -20]
                });		
                                                                
                mapGr.geoObjects.add(mapPlacemark);              
            }); 
		}     
        
    }
};