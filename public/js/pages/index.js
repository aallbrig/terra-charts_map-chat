var IndexPage = function(mapTarget) {
  var _mapTarget = $(mapTarget),
      _mapOptions = {
        center: { lat: -34.397, lng: 150.644},
        zoom: 8
      },
      _map = new google.maps.Map(_mapTarget[0], _mapOptions),
      _markers = [];
  
  console.log('index!');
  return {};
};
