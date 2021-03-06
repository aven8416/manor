<div class="wrapper container-fluid margin-t-40">
    {!! Form::open(['url' => route('portfolioAdd'),
    'class'=>'form-horizontal',
    'method'=>'POST',
    'enctype'=>'multipart/form-data']) !!}


    <div class="form-group">

        {!! Form::label('title','Заголовок:',['class' => 'col-xs-2 control-label'])   !!}
        <div class="col-xs-8 ">
            {!! Form::text('title',old('title'),['class' => 'form-control','placeholder'=>'Введите содержимое Заголовка'])!!}
        </div>

    </div>


    <div class="form-group">
        {!! Form::label('subtitle', 'Подзаголовок:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('subtitle', old('subtitle'), ['class' => 'form-control','placeholder'=>'Введите содержимое Подзаголовка']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите желаемый текст']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('image', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>


    {!! Form::close() !!}
    <script>
        CKEDITOR.replace('editor');
    </script>
</div>