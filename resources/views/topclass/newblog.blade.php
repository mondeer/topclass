@extends('topclass.dashboard')

@section('content')
<div class="row imondgray">
  <div class="col-md-11">
    <h1>Hi TopClass, Create a new blog</h1>
    <form class="form-horizontal" action="/newblog" method="post">
      {{csrf_field()}}
      <div class="form-group">
        <label class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="title" placeholder="your title goes here" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <textarea id="message" class="form-control" rows="13" placeholder="Topclass, your content goes here, at the bottom right of this canvas, expand" name="content"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="subscribe-form margin-top-20">
            <button class="load-more-button" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>

<!-- <div class="col-md-8 col-md-offset-2">
 <form id="" action="/subscribe" method="post">

     <div class="subscribe-form margin-top-20">
         <input id="mc-email" type="email" name="email" placeholder="Email Address" class="text-input">
         <button class="submit-btn" type="submit">Submit</button>
     </div>
    <p>Subscribe to my weekly Thoughts</p>
    <label for="mc-email" class="mc-label"></label>
    </form>

 </div> -->
@endsection
