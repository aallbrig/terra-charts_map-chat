@section('styles')

@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <h1>Terra Charts Map Chat</h1>
    <p>This is an experiment that I decided to create to explore the idea of geofencing locations off in order for users to leave messages with each other.  This will ultimately be a part of <a href="http://terra-charts.com">Terra Charts</a> and separating it out into it's own module allows me to see if it's an idea worth pursuing.  The gist is, you pick up and move a "player" character into different 100 mile geofenced regions, as marked by special markers, in order to leave messages.</p>
    <h3>Open Source</h3>
    <p>You can find the source <strong><a href="https://github.com/aallbrig/terra-charts_map-chat">here on github.</a></strong></p>
    <h3>Technologies</h3>
    <p>There are a few technologies I decided to use for this project:</p>
    <ul>
      <li>Digital Ocean VPS for hosting</li>
      <li>Apache2 server</li>
      <li>MySQL DB</li>
      <li>PHP</li>
      <li>Laravel</li>
      <li>Laravel's Eloquent ORM for database schema creation</li>
      <li>Laravel Generators to avoid writing boilerplate code</li>
      <li>Classes for interactive layer</li>
      <li>ReactJS for some view handling</li>
      <li>React Bootstrap for the Modal</li>
      <li>Blade Templates to pass data into pages</li>
    </ul>
    <h3>Contribute!</h3>
    <p>If you read through my code and find something you think you can improve, please do!</p>
  </div>
</div>
@stop