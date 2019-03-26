@extends('layouts.app')

@section('content')
<div id="userBoard">
  <div id="userBoard-left-col">
    <h1 class="fonce">Bonjour,<br>John Doe</h1>
    <div id="userBoard-left-col-content">
        <h4 class="fonce"> Liste des personnes</h4>
        <input type="text" class="font-light" placeholder="saisir le nom de vos usagers &#8981;"></input>
        <!-- <i class="material-icons">search</i> -->
        <ul>
          <li id="add-new"><i class="material-icons">add</i>Enregister une nouvelle personne</li>
          <li>Sarah Liren <br> Prochain RDV : 30/04/19<button class="btn-floating btn-large right"><i class="material-icons right">nature_people</i></button></li>
          <li>Marie Roy <br> Prochain RDV : 12/05/19<i class="material-icons right">nature_people</i></li>
          <li>Émile Poulin <br> Prochain RDV : 20/05/19<i class="material-icons right">nature_people</i></li>
          <li>Ariana Sficce <br> Prochain RDV : 31/05/19<i class="material-icons right">nature_people</i></li>
          <li>Pierre Scaffidi <br> Prochain RDV : 03/06/19<i class="material-icons right">nature_people</i></li>
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
