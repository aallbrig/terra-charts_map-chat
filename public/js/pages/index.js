/** @jsx React.DOM */

var IndexPage = function(mapTarget, data, chatModal) {
  var _mapTarget = $(mapTarget),
      _data = data,
      _mapOptions = {
        zoom: 2,
        center: new google.maps.LatLng(39.768183, -86.158210),
        disableDefaultUI: false,
        panControl: true,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: true,
        streetViewControl: false,
        overviewMapControl: false,
        disableDoubleClickZoom: true,
        mapTypeId: google.maps.MapTypeId.HYBRID
      },
      _map = new google.maps.Map(_mapTarget[0], _mapOptions),
      _chatModal = chatModal,
      _chatRegions = [],
      _player;
  // Hide modal
  chatModal.show();
  var mockData = [{message:"bacon"},{message:"bacon bacon bacon bacon bacon bacon bacon bacon test test test test test test test"},{message:"test"}];
  chatModal.updateMessages(mockData);  
  // Add chat modal onto document

  // Add chat regions for each chat region

  // Add player marker

    // Instantiate player at Indianapolis (39.768183, -86.158210)
  return {};
};
