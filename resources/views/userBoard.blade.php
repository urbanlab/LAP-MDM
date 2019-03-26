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
          <li><p class="font-strong">Sarah Liren</p><br> Prochain RDV : 30/04/19<button class="btn-floating btn-large right"><i class="material-icons">nature_people</i></button></li>
          <li><p class="font-strong">Marie Roy</p><br> Prochain RDV : 12/05/19<button class="btn-floating btn-large right"><i class="material-icons">nature_people</i></button></li>
          <li><p class="font-strong">Émile Poulin</p><br> Prochain RDV : 20/05/19<button class="btn-floating btn-large right"><i class="material-icons">nature_people</i></button></li>
          <li><p class="font-strong">Ariana Sficce</p><br> Prochain RDV : 31/05/19<button class="btn-floating btn-large right"><i class="material-icons">nature_people</i></button></li>
          <li><p class="font-strong">Pierre Scaffidi</p><br> Prochain RDV : 03/06/19<button class="btn-floating btn-large right"><i class="material-icons">nature_people</i></button></li>
        </ul>
    </div>
  </div>
  <div id="userBoard-right-col">
    <div class="top-content">
      <div>Deconnexion</div>
      <div>Nom app</div>
    </div>
    <div>Logo</div>
  </div>

</div>
@endsection
