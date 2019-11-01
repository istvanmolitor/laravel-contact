{!! Form::open(['route' => 'contact.send']) !!}

<div class="form-group">
    {!!  Form::label('email', 'E-mail', ['class' => 'control-label']) !!}
    {!! Form::text('email', '', ['class' => 'form-control']) !!}
    @if($errors->has('email'))
        <span class="help-block">{{ $errors->first('email') }}</span>
    @endif
</div>

<div class="form-group">
    {!!  Form::label('name', 'Név', ['class' => 'control-label']) !!}
    {!! Form::text('name', '', ['class' => 'form-control']) !!}
    @if($errors->has('name'))
        <span class="help-block">{{ $errors->first('name') }}</span>
    @endif
</div>

<div class="form-group">
    {!!  Form::label('phone', 'Telefonszám', ['class' => 'control-label']) !!}
    {!! Form::text('phone', '', ['class' => 'form-control']) !!}
    @if($errors->has('phone'))
        <span class="help-block">{{ $errors->first('phone') }}</span>
    @endif
</div>

<div class="form-group">
    {!!  Form::label('message', 'Üzenet', ['class' => 'control-label']) !!}
    {!! Form::textarea('message', '', ['class' => 'form-control']) !!}
    @if($errors->has('message'))
        <span class="help-block">{{ $errors->first('message') }}</span>
    @endif
</div>

{!! Form::submit('Küldés', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}