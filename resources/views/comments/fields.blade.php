<!-- Textarea Field -->
<div class="form-group col-sm-6">
    {!! Form::label('textarea', 'Textarea:') !!}
    {!! Form::text('textarea', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('comments.index') }}" class="btn btn-default">Cancel</a>
</div>
