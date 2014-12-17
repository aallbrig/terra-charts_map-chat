@section('styles')

@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    This is the about page.
  </div>
</div>
@stop

@section('scripts')
{{ HTML::script('js/pages/about.js'); }}
<script type="text/javascript">
$(function(){
  var page = new AboutPage();
  console.log(page);
});
</script>
@stop