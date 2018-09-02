@extends('topclass.dashboard')

@section('content')
<div class="col-md-6">
  <div class="panel-heading">Assign Writer</div>


      <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
            action="/topclass/quiz-assign-writer/{{$assignment->id }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="PUT">

          <div class="form-group">
              <label class="col-md-4 control-label">Writer</label>
              <div class="col-md-6">
                  <select class="form-control" name="writer">
                    @foreach($writers as $writer)
                      <option value="{{$writer->email}}">{{$writer->email}}</option>
                    @endforeach
                  </select>
              </div>
          </div>

          <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                  <button type="submit" data-toggle="modal" data-target="#update" class="btn btn-primary">Update Entry</button>
              </div>
          </div>
      </form>

</div>

<!-- Modal Success Popup -->
<div id="update" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<h4 class="modal-title">Awesome!</h4>
			</div>
			<div class="modal-body">
				<p class="text-center">You have Assigned {{$assignment->writer}} for this job</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>
@endsection
