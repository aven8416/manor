<div class="container margin-t-40   ">
<div style="margin:0px 50px 0px 50px;">

@if($reviews)

    <table class="table table-hover table-striped table-bordered ">
        <thead>
        <tr>
            <th>№ п/п</th>
            <th>Заголовок</th>
            <th>Текст</th>
            <th>Рецензент</th>
            <th>Откуда рецензент</th>
            <th>Дата создания</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $k => $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{!! Html::link(route('reviewEdit',['review'=>$review->id]),$review->title,['alt'=>$review->title]) !!}</td>
                <td>{{ $review->text }}</td>
                <td>{{ $review->reviewer }}</td>
                <td>{{ $review->address }}</td>
                <td>{{ $review->created_at }}</td>

                <td>
                    {!! Form::open(['url'=>route('reviewEdit',['review'=>$review->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}


                    {{method_field('DELETE')}}
                    {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}

                    {!! Form::close() !!}
                </td>

            </tr>

        @endforeach

        </tbody>
    </table>
    @endif
    <div class="container margin-b-40   ">
    {!! Html::link(route('reviewAdd'),'Новый отзыв') !!}
    </div>
    </div>
</div>