@extends('layouts.app')

@section('content')
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

                    Vous êtes maintenant connecté !

                    @foreach ($folders as $folder)
                        <a class="waves-effect waves-light btn popup-trigger" href="#modal{{$folder->id}}" data-id="{{$folder->id}}">
                            <i class="material-icons medium">{{ $folder -> icon }}</i>
                        </a>
                        <a href="folder/delete/{{$folder->id}}"><i class="material-icons little">close</i></a>
                    @endforeach

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
        </div>
    </div>
</div>

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
        <a href="#!" data-id="{{$folder->id}}" class="popup-close waves-effect waves-green btn-flat">X</a>
        <h4><i class="material-icons medium">{{ $folder -> icon }}</i>{{$folder->title}}</h4>
        <?php
            echo Form::open(array('url' => 'folder/update/$folder->id'));
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

@endsection
