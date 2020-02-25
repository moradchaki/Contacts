@extends('layouts.progress')

@section('content')
<header id="head" class="secondary"></header>

<div class="container">

	<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">About</li>
		</ol>

<div class="row">
<article class="col-sm-9 maincontent">

<div class="container">
      <div class="row">
          <div class="col-md-20">
          <h2>List</h2>
            <div class="pull-right">
               <a href="{{ url('contacts/create') }}" class="btn btn-success">New Contact</a>
             </div>
          </div>
          <table class="table">
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Adresse</th>
             <th>City</th>
             <th>Date</th>
             <th>Action</th>
           </tr>
            @foreach($contacts as $contact)
              <tr>
              <td>{{ $contact->id }} <br>{{ $contact->user_id}}</td> 
              <td>{{ $contact->name }}</td>
              <td>{{ $contact->adresse }}</td>
              <td>{{ $contact->city }}</td>
              <td>{{ $contact->created_at }}</td>
              <td>
            
               <form action="{{ url('contacts/'.$contact->id) }}" method="post">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
               <a href="{{ route('contacts.edit', ['contact' => $contact->id]) }}" class="btn btn-warning">Editer</a>
               <button type="submit" class="btn btn-danger">Supprimer</button>
               </form>
              </td>
              </tr>
            @endforeach  
          </table>
          </div>
    </div>
</div>
</article>
@endsection