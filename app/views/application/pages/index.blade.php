@section('styles')

@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div id="map-canvas"></div>
  </div>
</div>
@stop

@section('scripts')
{{ HTML::script('js/pages/index.js'); }}
<script type="text/javascript">
$(function(){
  var page = new IndexPage('#map-canvas');
});
</script>
@stop