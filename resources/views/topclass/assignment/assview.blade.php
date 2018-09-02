@extends('topclass.dashboard')

@section('content')
  <div class="row">
    <div class="col-md-offset-1 col-md-8">
      <a class="btn btn-success btn-lg pull-right" href="#">
        <form class="delete" action="/topclass/quiz/submit/{{$ass->id}}" method="post">
          <input type="hidden" name="_method" value="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="btn btn-danger" value="Submit">
        </form>
      </a>
      <a class="btn btn-success btn-lg pull-left" href="/topclass/quiz-assign-writer/{{$ass->id}}">Assign Writer</a>
      <br><br><hr style="border-right: 1px solid #F20000;"></hr>
      <div>
        <table class="table table-bordered table-striped">
          <tr>
            <td>Email</td>
            <td>{{$ass->email}}</td>
          </tr>
          <tr>
            <td>Phone</td>
            <td>{{$ass->phone}}</td>
          </tr>
          <tr>
            <td>Writer</td>
            <td>{{$ass->writer}}</td>
          </tr>
          <tr>
            <td>Topic</td>
            <td>{{$ass->topic}}</td>
          </tr>
        </table>
      </div>
      <div class="text-center-block">
        <h3>{!!$ass->due_date!!}</h3>
        <h3>{!!$ass->length_of_assignment!!}</h3>
      </div>
      <p class="imondfont" align="justify">
          {!! $ass->instructions !!}
      </p>
    </div>
  </div>
@endsection
