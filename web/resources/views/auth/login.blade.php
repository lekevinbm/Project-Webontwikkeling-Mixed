@extends('layouts.app')

@section('content')


<div class="login-box" id="login-box">
  <h1>Inloggen</h1>
  <form method="POST" action="{{ url('/login') }}">
    {!! csrf_field() !!}
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Uw emailadres">
      </div>
      <div class="form-group">
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" class="form-control" placeholder="Uw passwoord">
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block" value="Inloggen"/>
      </div>
  </form>
</div>



@endsection
