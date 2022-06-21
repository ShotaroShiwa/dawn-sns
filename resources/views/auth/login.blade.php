@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<div class="logout-wrapper">
 <p class="welcome">DAWNSNSへようこそ</p>

 <div class="mail">{{ Form::label('MailAdress') }}</div>
 <div class="">{{ Form::text('mail',null,['class' => 'input']) }}</div>
 <div class="password">{{ Form::label('password') }}</div>
 <div class="">{{ Form::password('password',['class' => 'input']) }}</div>

 <div class="login-btn">{{ Form::submit('LOGIN') }}</div>

 <p class="new-user"><a href="/register">新規ユーザーの方はこちら</a></p>
</div>

{!! Form::close() !!}

@endsection
