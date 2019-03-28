@extends('layouts.app')

@section('content')
<div id="homeBlade">
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
-->

                <div class="card-header font-strong"><i class="material-icons">keyboard_return</i> &nbsp;&nbsp;{{$currentUser->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- ajouter des objectifs globaux / on recupere les titre des missions pour l'instant
                    <h1>Objectifs Globaux</h1>
                    @foreach ($folders as $folder)
                    <h3>{{$folder->title}}</h3>
                    @endforeach
                  -->

                    <!-- icones de parcours-->
                    @foreach ($folders as $folder)
                    <div class="newMission">
                        <div class="mission">
                          <a class="btn-floating btn-large waves-effect waves-light popup-trigger" href="#modal{{$folder->id}}" data-id="{{$folder->id}}">
                              <i class="material-icons medium">{{ $folder -> icon }}</i>
                          </a>
                        </div>
                        <div class="mission-info-supp">{{$folder->title}}</div>
                        <a class="deleteMission" href="folder/delete/{{$folder->id}}"><i class="material-icons little">close</i></a>
                    </div>
                    @endforeach

                    <!-- nouvelle mission-->
                    <div class="addNewMission">
                      <a class="btn-floating btn-large waves-effect waves-light popup-trigger" href="fichier draw">
                          <i class="material-icons medium">add</i>
                      </a>
                      <?php
                          echo Form::open(array('url' => 'folder/add'));
                              echo Form::text('title','Titre');
                              echo '<br/>';

                              echo Form::text('icon','ac_unit');
                              echo '<br/>';

                              echo Form::textarea('dsc', 'description');
                              echo '<br/>';

                              echo Form::textarea('user_id', $currentUser->id);
                              echo '<br/>';

                              echo Form::submit('Ajouter au parcours');
                          echo Form::close();
                      ?>
                    </div>
                </div>
                <!--
            </div>
        </div>
    </div>
</div>
-->
@if ($currentUser->state === 0)
    @foreach ($folders as $folder)
    <div id="popup{{$folder->id}}" class="popup">
        <a data-id="{{$folder->id}}" class="popup-close waves-effect waves-green btn-flat">X</a>
        <div class="modal-content">
            <h4><i class="material-icons medium">{{ $folder -> icon }}</i>{{$folder->title}}</h4>
            <p>A bunch of text</p>
        </div>
    </div>
    @endforeach
@endif

@if ($currentUser->state === 1)
    @foreach ($folders as $folder)
    <div id="popup{{$folder->id}}" class="popup">
        <a href="#!" data-id="{{$folder->id}}" class="popup-close waves-effect waves-green btn-floating"><i class="material-icons">close</i></a>
        <h4><i class="material-icons medium">{{ $folder -> icon }}</i>{{$folder->title}}</h4>
        <?php
            echo Form::open(array('url' => 'folder/update/'.$folder->id));
                echo Form::text('title',$folder->title);
                echo '<br/>';

                echo Form::text('icon',$folder->icon);
                echo '<br/>';

                echo Form::textarea('dsc', $folder->dsc);
                echo '<br/>';

                echo Form::textarea('user_id', $currentUser->id);
                echo '<br/>';

                echo Form::submit('Mettre à jour');
            echo Form::close();
        ?>
    </div>
    @endforeach
@endif

</div> <!-- end homeBlade -->
@endsection
