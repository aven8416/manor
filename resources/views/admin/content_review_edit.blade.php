<div class="wrapper container-fluid margin-t-40">
    {!! Form::open(['url' => route('reviewEdit',array('review'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::hidden('id', $data['id']) !!}
        {!! Form::label('title', 'Заголовок:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('title', $data['title'], ['class' => 'form-control','placeholder'=>'Введите заголовок отзыва']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст отзыва']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('reviewer', 'Рецензент:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('reviewer', $data['reviewer'], ['class' => 'form-control','placeholder'=>'Введите имя рецензента']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Откуда рецензент:',['class'=>'col-xs-2 control-label']) !!}
        <div class="col-xs-8">
            {!! Form::text('address', $data['address'], ['class' => 'form-control','placeholder'=>'Введите откуда рецензент']) !!}
        </div>
    </div>





    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
            {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
        </div>
    </div>

    {!! Form::close() !!}

    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</div>