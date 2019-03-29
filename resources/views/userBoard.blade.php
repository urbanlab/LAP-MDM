@extends('layouts.app')

@section('content')
<div id="userBoard">
  <div id="userBoard-left-col">
    <h1 class="fonce">Bonjour,<br>{{$currentUser->name}}</h1>
    <div id="userBoard-left-col-content">
        <h4 class="fonce"> Liste des personnes</h4>
        <input type="text" class="font-light" placeholder="saisir le nom de vos usagers &#8981;"></input>
        <!-- <i class="material-icons">search</i> -->
        <ul>
          <li id="add-new"><i class="material-icons">add</i>Enregister une nouvelle personne</li>
          @foreach ($users as $user)
          <a href="/home/{{$user->id}}"><li>{{$user->name}}<br> Prochain RDV : 12/05/19<button class="btn-floating btn-large waves-effect waves-light right"><i class="material-icons">nature_people</i></button></li></a>
          @endforeach
        </ul>
    </div>
  </div>
  <div id="userBoard-right-col">
    <div class="top-content">
      <div id="deco"><a href="{{ url('/home') }}">Déconnexion</a></div>
      <div id="nom">Mon parcours social</div>
    </div>
    <div id="logo">Logo</div>
  </div>

</div>
@endsection
