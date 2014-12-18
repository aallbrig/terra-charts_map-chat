/** @jsx React.DOM */
// Thanks http://stackoverflow.com/questions/8766218/detect-if-marker-is-within-circle-overlay-on-google-maps-javascript-api-v3
google.maps.Circle.prototype.contains = function(latLng) {
  return this.getBounds().contains(latLng) && google.maps.geometry.spherical.computeDistanceBetween(this.getCenter(), latLng) <= this.getRadius();
}

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
        mapTypeId: google.maps.MapTypeId.TERRAIN
      },
      _map = new google.maps.Map(_mapTarget[0], _mapOptions),
      _chatModal = chatModal,
      _chatRegions = [],
      _player;
  // Hide modal
  chatModal.hide();
  // chatModal.updateMessages(mockData);

  // Add chat regions for each chat region
  _data.chatCircles.map(function(chatCircle){
    // Create marker 
    var marker = new google.maps.Marker({
      map: _map,
      position: new google.maps.LatLng(chatCircle.lat, chatCircle.lng),
      icon: '/images/chat.png',
      animation: google.maps.Animation.DROP
    });
    // Add circle overlay and bind to marker
    var circle = new google.maps.Circle({
      map: _map,
      radius: chatCircle.radius,    // 10 miles in metres
      fillColor: '#333399',
      strokeColor: '#3366CC'
    });
    circle.bindTo('center', marker, 'position');
    _chatRegions.push({marker:marker,circle:circle, messages:chatCircle.messages});
  });
  // Add player marker
  // Instantiate player at Indianapolis (39.768183, -86.158210)
  _player = new google.maps.Marker({
    map: _map,
    position: new google.maps.LatLng(39.768434, -86.162905),  // Indianapolis
    icon: '/images/player.png',
    animation: google.maps.Animation.BOUNCE,
    draggable: true
  });
  // Add dragend event listener
  google.maps.event.addListener(_player,'dragend',function(e) {
    _chatRegions.forEach(function(chatCircle){
      if(chatCircle.circle.contains(e.latLng)){
        chatModal.updateMessages(chatCircle.messages);
        chatModal.show();
      }
    });
  });
};
