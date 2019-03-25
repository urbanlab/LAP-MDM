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
                        <i class="material-icons medium">{{ $folder -> icon }}</i>
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
                    
                            //echo Form::select('objectives',  array('obj1' => 'obj1', 'obj2' => 'obj2', 'obj3' => 'obj3'), null, ['class' => 'form-control']);
                            
                            echo Form::submit('Ajouter au parcours');
                        echo Form::close();
                    ?>
   

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
