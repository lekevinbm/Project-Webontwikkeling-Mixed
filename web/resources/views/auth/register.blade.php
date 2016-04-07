@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registreren</h1>
        <div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        
                {!! csrf_field() !!}


                        <div class="form-group">
                            <label class="col-md-4 control-label">Voornaam</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                
                        <div class="form-group">
                            <label class="col-md-4 control-label">Naam</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Adres</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Kies een passwoord</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Registreer
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
        
    </div>
    

@endsection