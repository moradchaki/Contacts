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
        <div class="cl-md-8 col-md-offset-2 text-center">
            <h2>this page non autorize</h2>
            <a href="{{ url('contacts') }}" class="btn btn-danger">Retour</a>
        </div>
    </div>
</div>

@endsection