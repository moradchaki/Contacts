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
      <div class="row">
          <div class="col-md-12">
          <form action="{{ url('contacts/'.$contact->id)}}" method="post">
              <input type="hidden" name="_method" value="PUT">

               {{ csrf_field() }}
                 <div class="form-group">
                 <label for="name">Name</label><br>
                 <input type="text" class="from-control" name="name" value="{{ $contact->name }}" style="width: 100%;">
                </div>

                <div class="form-group">
                 <label for="adresse">Adresse</label><br>
                 <input type="text" class="from-control" name="adresse" value="{{ $contact->adresse }}" style="width: 100%;">
                </div>
                 <br>
                 <div class="form-group">
                 <label for="city">city</label><br>
                 <input type="text" class="from-control" name="city" value="{{ $contact->city }}" style="width: 100%;">
                </div>
                <div class="form-group">
                 <input type="submit" class="from-control btn btn-danger" value="Update" style="width: 100%;">
                </div>
          </form>
       </div>
   </div>
</div>

</article>

@endsection