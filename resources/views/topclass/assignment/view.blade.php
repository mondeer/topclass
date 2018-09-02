@extends('topclass.dashboard')

@section('content')
    <div class="">
      <div class="">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Subject, Level, Page_count</th>
                <th>Question</th>
                <th>Assignment Type</th>
                <th>Deadline</th>
                <th>Email</th>
                <th>Phone</th>
                <th>EDIT</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach($quizes as $quiz)
                <tr>
                    <td>{{$quiz->id}}</td>
                    <td>{{$quiz->subject}}, {{$quiz->level}}, {{$quiz->page_count}}</td>
                    <td>{!! str_limit($quiz->instructions, $limit = 50, $end = "...") !!}</td>
                    <td>{{$quiz->work_type}}</td>
                    <td>{{$quiz->deadline}}</td>
                    <td>{{$quiz->email}}</td>
                    <td>{{$quiz->phone}}</td>
                    <td><a class="btn btn-primary" href="/topclass/viewquiz/{{$quiz->id}}">View</a></td>
                    <td>
                      <form class="delete" action="/topclass/quiz/{{ $quiz->id }}" method="post">
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
