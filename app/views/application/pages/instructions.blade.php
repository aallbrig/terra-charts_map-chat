@section('styles')

@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    This is the instructions page.
  </div>
</div>
@stop

@section('scripts')
{{ HTML::script('js/pages/instructions.js'); }}
<script type="text/javascript">
$(function(){
  var page = new InstructionsPage();
  console.log(page);
});
</script>
@stop