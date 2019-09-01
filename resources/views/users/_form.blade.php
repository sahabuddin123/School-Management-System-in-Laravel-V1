@if (isset($errors) && (count($errors) > 0))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<div class="form-group">
    {{ Form::label('name', 'Name') }} <em>*</em>
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'required' => 'required']) }}
</div>
 
<div class="form-group">
    {{ Form::label('email', 'Email') }} <em>*</em>
    {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
 
<div class="form-group">
    {{ Form::label('password', 'Password') }} <em>*</em>
    {{ Form::password('password', ['class' => 'form-control', 'id' => 'password']) }}
</div>
 
<div class="form-group">
    {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
</div>