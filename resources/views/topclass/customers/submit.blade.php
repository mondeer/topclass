@extends('layouts.app')

@section('content')
<div class="row">
    <div class="sub-title">
  		<a href="/" title="Go to Home Page"><h2>Back Home</h2></a>
      <a href="#" class="smoth-scroll"><i class="icon-bubbles"></i></a>
   </div>
  <div class="col-md-12 imondfont">
    <form class="form" method="POST" action="/assignment/submit">
      {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label imondfont">Subject</label>
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                  <label class="control-label">Level</label>
                  <select class="form-control" name="level" autofocus>
                    <option></option>
                    <option value="highschool">High School</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="postgraduate">Post Graduate</option>
                  </select>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Type</label>
                  <select class="form-control" name="work_type" autofocus>
                    <option></option>
                    <option value="assignment">Assignment</option>
                    <option value="coursework">Coursework</option>
                    <option value="homework">Homework</option>
                    <option value="thesis">Thesis</option>
                  </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>Page Count</label>
                  <input type="number" name="page_count" placeholder="Page Count..." class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Language</label>
                  <select class="form-control" name="language" autofocus>
                    <option></option>
                    <option value="english_uk">English U.K</option>
                    <option value="english_us">English U.S</option>
                    <option value="other_lang">other</option>
                  </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>Deadline</label>
                  <select class="form-control" name="deadline" autofocus>
                    <option></option>
                    <option value="ten days">10 Days & More</option>
                    <option value="six days">6 Days</option>
                    <option value="four days">4 days</option>
                  </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                  <label>Topic</label>
                  <input type="text" name="topic" placeholder="Topic..." class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <div class="form-group">
                <label>Instructions</label>
                <textarea class="form-control" name="instructions" rows="4" cols="20"></textarea>
              </div>
          </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control" placeholder="Place your email here ......" value="{{old('email')}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="+1(234)7576785" value="{{old('phone')}}">
                </div>
            </div>
        </div>
        <hr>
        <div class="subscribe-form margin-top-20">
            <button class="load-more-button" type="submit">Submit</button>
        </div>
    </form>
  </div>
</div>
@endsection
