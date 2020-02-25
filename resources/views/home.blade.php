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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
</article>
@endsection
