@extends('layouts.app')

@section('content')
<div id="userBoard">
  <div id="userBoard-left-col">
    <h1>Bonjour,<br>John Doe</h1>
    <div id="userBoard-left-col-content">
        <h5> Liste des personnes</h5>
        <input type="text" placeholder="saisir le nom de vos usagers"></input>
        <ul>
          <li id="new">Enregister une nouvelle personne<i class="material-icons right">add</i></li>
          <li>Sarah Liren <br> Prochain RDV : 30/04/19<i class="material-icons right">nature_people</i></li>
        </ul>
    </div>
  </div>
  <div id="userBoard-right-col">

  </div>

</div>
@endsection
