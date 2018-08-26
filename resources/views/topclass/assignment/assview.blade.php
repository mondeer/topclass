@extends('topclass.dashboard')

@section('content')
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <button type="button" class="btn btn-primary"> <a href="/topclass/viewquiz">Back</a> </button>
      <h1>Specific Quiz</h1>
      <div class="text-center-block">
        <h3>{!!$ass->due_date!!}</h3>
        <h3>{!!$ass->length_of_assignment!!}</h3>
      </div>
      <p class="lead imondblog" align="justify">
          {!! $ass->question !!}
      </p>
    </div>
  </div>
@endsection
