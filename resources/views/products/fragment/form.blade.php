<div class="form-group">
{!! Form::label('name', 'Nombre del producto')!!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('short', 'Descripcion breve del producto')!!}
{!! Form::text('short', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::label('body', 'Descripcion')!!}
{!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>
