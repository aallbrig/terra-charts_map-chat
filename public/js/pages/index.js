/** @jsx React.DOM */
// Thanks http://stackoverflow.com/questions/8766218/detect-if-marker-is-within-circle-overlay-on-google-maps-javascript-api-v3
google.maps.Circle.prototype.contains = function(latLng) {
  return this.getBounds().contains(latLng) && google.maps.geometry.spherical.computeDistanceBetween(this.getCenter(), latLng) <= this.getRadius();
}

var IndexPage = function(mapTarget, data, chatModal) {
  var _mapTarget = $(mapTarget),
      _data = data,
      _mapOptions = {
        zoom: 4,
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

  // Add chat regions for each chat region
  _data.map(function(chatCircle){
    // Create marker
    var marker = new google.maps.Marker({
      map: _map,
      position: new google.maps.LatLng(chatCircle.lat, chatCircle.lng),
      icon: app.config.rootUrl + 'images/chat.png',
      animation: google.maps.Animation.DROP
    });
    // Add circle overlay and bind to marker
    // http://www.colorcombos.com/color-schemes/17/ColorCombo17.html
    var circle = new google.maps.Circle({
      map: _map,
      radius: parseFloat(chatCircle.radius),
      fillColor: '#333399',  // Medium Blue
      strokeColor: '#3366CC' // Dark Blue
    });
    circle.bindTo('center', marker, 'position');
    _chatRegions.push({chatCircleId:chatCircle.id, title:chatCircle.title, marker:marker,circle:circle,messages:chatCircle.messages});
  });
  // Instantiate player at Indianapolis (39.768183, -86.158210) (because, you know, that's my city :)
  _player = new google.maps.Marker({
    map: _map,
    position: new google.maps.LatLng(39.768434, -86.162905),  // Indianapolis
    icon: app.config.rootUrl + 'images/player.png',
    animation: google.maps.Animation.BOUNCE,
    draggable: true
  });
  // Player event listeners!
  // Stop bouncing on drag start
  google.maps.event.addListener(_player,'dragstart',function() {
    _player.setAnimation(null);
  });
  // Add dragend event listener
  google.maps.event.addListener(_player,'dragend',function(e) {
    _chatRegions.forEach(function(chatCircle){
      if(chatCircle.circle.contains(e.latLng)){
        chatModal.updateMessages(chatCircle.messages);
        chatModal.show(chatCircle.chatCircleId, chatCircle.title, function(message){
          chatCircle.messages.push(message);
        });
      }
    });
    _player.setAnimation(google.maps.Animation.BOUNCE);
  });
};
