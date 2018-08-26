@extends('topclass.dashboard')

@section('content')
    <div class="">
      <div class="">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Customer Email</th>
                <th>Question</th>
                <th>Due Date</th>
                <th>Length of Assignment</th>
                <th>EDIT</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($quizes as $quiz)
                <tr>
                    <td>{{$quiz->id}}</td>
                    <td>{{$quiz->email_customer}}</td>
                    <td>{!! str_limit($quiz->question, $limit = 50, $end = "...") !!}</td>
                    <td>{{$quiz->due_date}}</td>
                    <td>{{$quiz->length_of_assignment}}</td>
                    <td><a class="btn btn-primary" href="/topclass/viewquiz/{{$quiz->id}}">View</a></td>
                    <td>
                      <form class="delete" action="/topclass/{{ $quiz->id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="Delete">
                      </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
      </div>
    </div>
@endsection
