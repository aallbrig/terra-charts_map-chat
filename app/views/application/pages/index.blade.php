@section('styles')
{{ HTML::style('css/index.css'); }}
@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <p><strong>Instructions:</strong> drag and drop the purple player marker onto blue chat region to leave an anonymous message!</p>
  </div>
  <div class="col-xs-12">
    <div id="map-canvas"></div>
  </div>
  <div id="chatModal"></div>
</div>
@stop

@section('scripts')
{{ HTML::script('js/pages/index.js'); }}
<script type="text/jsx" src="js/components/ChatModal.js"></script>
<script  type="text/jsx">
/** @jsx React.DOM */
$(function(){
  var mockMessages = [{message:"test"},{message:"test test test test test test test test test test test test test test test"},{message:"test"}]
  var data = {};
  var radius = 160934;
  data.chatCircles = [{id:1,
                       title:'Ellesmere Island',
                       lat: 81.430858,
                       lng: -84.403959,
                       radius: radius,
                       messages: mockMessages},
                      {id:2,
                       title:'Canada',
                       lat: 52.122217,
                       lng: -64.452787,
                       radius: radius,
                       messages: mockMessages},
                      {id:3,
                       title:'Baker County, Florida',
                       lat: 31.346599, 
                       lng: -84.598730,
                       radius: radius,
                       messages: mockMessages},
                      {id:4,
                       title:'Venezuela',
                       lat: 4.469640,
                       lng: -62.274510,
                       radius: radius,
                       messages: mockMessages},
                      {id:5,
                       title:'Brazil',
                       lat: -24.933767,
                       lng: -49.969823,
                       radius: radius,
                       messages: mockMessages},
                      {id:6,
                       title:'Argentina',
                       lat: -40.653556,
                       lng: -65.438572,
                       radius: radius,
                       messages: mockMessages},
                      {id:7,
                       title:'Antarctica',
                       lat: -74.475108,
                       lng: -67.547947,
                       radius: radius,
                       messages: mockMessages}];
  var chatModal = React.render(<ChatModal/>, document.getElementById('chatModal'));
  var page = new IndexPage('#map-canvas', data, chatModal);
});
</script>
@stop