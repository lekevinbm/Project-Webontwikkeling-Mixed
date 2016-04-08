@extends('layouts.app')

@section('content')

<div class="login-box" id="login-box">
  <h1>Registreren</h1>
  <form role="form" method="POST" action="{{ url('/register') }}">

    {!! csrf_field() !!}


    <div class="form-group">
      <label name="voornaam">Voornaam</label>
      <input type="text" class="form-control" name="voornaam" placeholder="Typ hier je voornaam">
    </div>

    <div class="form-group">
      <label for="name">Naam</label>
      <input type="text" class="form-control" name="name" placeholder="Typ hier je achternaam">
    </div>

    <div class="form-group">
      <label for="email">E-Mail</label>
      <input type="email" class="form-control" name="email" placeholder="Typ hier je E-mail adres">
    </div>

    <div class="form-group">
      <label for="password">Wachtwoord</label>
      <input type="password" class="form-control" name="password" placeholder="Typ hier je wachtwoord">
    </div>

    <div class="form-group">
      <input type="submit" class="btn btn-primary btn-block" value="Registreer"/>
    </div>
  </form>
</div>



@endsection
