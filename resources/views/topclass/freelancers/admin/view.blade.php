@extends('topclass.dashboard')

@section('content')
    <div class="col-md-8">
      <!-- <a class="btn btn-success btn-lg pull-right" href="/schooladmin/students/enroll">Enroll Student</a> -->
        <table id="example2" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th> Name</th>
                <th> Category of Freelance</th>
                <th> Experience (Years)</th>
                <th> Email</th>
                <th> Phone</th>
                <th> Status Acceptance</th>
              </tr>
            </thead>
            <tbody>
              @foreach($applicants as $application)
                <tr>
                  <td>{{$application->id}}</td>
                  <td>{{$application->first_name}} {{$application->last_name}}</td>
                  <td>{{$application->category_of_freelance}}</td>
                  <td>{{$application->years_of_experience}}</td>
                  <td>{{$application->email}}</td>
                  <td>{{$application->phone}}</td>
                  <td>{{$application->status_of_acceptance}}</td>
                  <td>
                    <form class="hire" action="/topclass/writer/hire/{{$application->id}}" method="post">
                      <input type="hidden" name="_method" value="put">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="submit" class="btn btn-success" value="Hire">
                    </form>
                  </td>
                  <td>
                    <form class="deletexp" action="/topclass/freelance/application/{{ $application->id }}/delete" method="post">
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
@endsection
