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
  var mockData = [{message:"test"},{message:"test test test test test test test test test test test test test test test"},{message:"test"}]
  var data = {};
  var chatModal = React.render(<ChatModal messages={mockData}/>, document.getElementById('chatModal'));
  var page = new IndexPage('#map-canvas', data, chatModal);
});
</script>
@stop