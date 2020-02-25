@extends('layouts.progress')

@section('content')
<header id="head" class="secondary"></header>

<div class="container">

	<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">About</li>
		</ol>

<div class="row">
<article class="col-sm-9 maincontent">
<div class="container">
      <div class="row justify-content-center">
          <div class="col-md-18">
              <div class="card">
                  <div class="card-header"></div>
                      <div class="card-body">
                          <form action="{{ url('contacts')}}" method="post">

                              {{ csrf_field() }}
                          <div class="form-group row">
                             <label for="name">Name</label><br>
                                  <input type="text" class="from-control" placeholder="Your name" 
                                   name="name" style="width: 100%;">
                              </div>
                              <div class="form-group row">
                                  <label for="adresse">Adresse</label><br>
                                      <input type="text" class="from-control" placeholder="Your Adresse"  name="adresse" style="width: 100%;">
                              </div>
                              <br>
                              <div class="form-group row">
                                  <label for="city">City</label><br>
                                      <input type="text" class="from-control" placeholder="Your City" name="city" style="width: 100%;">
                              </div>
                              @if($errors->any())
                              <ul>
                              @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                              </ul>
                              @endif
                            
                              <br>
                              <div class="form-group row">
                                      <input type="submit" class="from-control btn btn-primary"  value="Save" style="width: 100%;">
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
       </div>
</div>
</article>

@endsection