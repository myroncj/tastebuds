@if(count($errors))
  <div class="alert alert-danger">
    @if ($errors)
      <ul>
        @foreach($errors->all() as $err)
          <li>{{$err}}</li>
        @endforeach
      <ul>
    @endif
  </div>
@endif
