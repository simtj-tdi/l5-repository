@inject('documents', 'App\Http\Utils\Docuemnt')

<div class="form-group">
    {{ Form::label('name', 'Name:', ['class' => 'control-label'] ) }}
    {{ Form::text('name', null, ['class' => 'form-control'] ) }}
</div>

<div class="form-group">
    {{ Form::label('email', 'Email:', ['class' => 'control-label'] ) }}
    {{ Form::text('email', null, ['class' => 'form-control'] ) }}
</div>

<div class="form-group">
    {{ Form::label('phone', 'Phone:', ['class' => 'control-label'] ) }}
    {{ Form::text('phone', null, ['class' => 'form-control'] ) }}
</div>

<div class="form-group">
    {{ Form::label('document_type', 'Document type:', ['class' => 'control-label'] ) }}
    {{ Form::select('document_type', $documents::all(),  null, ['class' => 'form-control'] ) }}
</div>

<div class="form-group">
    {{ Form::label('document_number', 'Document_number:', ['class' => 'control-label'] ) }}
    {{ Form::text('document_number', null, ['class' => 'form-control'] ) }}
</div>

<div class="form-group text-right">
    <button class="btn btn-primary">{{ $buttonText }}</button>
</div>
