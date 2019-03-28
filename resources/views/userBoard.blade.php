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
          <a href="/home/{{$user->id}}"><li>{{$user->name}}<br> Prochain RDV : 12/05/19<i class="material-icons right">nature_people</i></li></a>
          @endforeach
        </ul>
    </div>
  </div>
  <div id="userBoard-right-col">
    <div>Déconnexion</div>
    <div>Nom app</div>
    <div>Logo</div>
  </div>

</div>
@endsection
