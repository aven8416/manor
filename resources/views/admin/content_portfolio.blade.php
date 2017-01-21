<div class="container margin-t-40   ">
    <div style="margin:0px 50px 0px 50px;">

        @if($portfolios)

            <table class="table table-hover table-striped table-bordered ">
                <thead>
                <tr>
                    <th>№ п/п</th>
                    <th>Заголовок</th>
                    <th>Подзаголовок</th>
                    <th>Текст</th>
                    <th>Изображение</th>
                    <th>Дата создания</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($portfolios as $k => $portfolio)
                    <tr>
                        <td>{{ $portfolio->id }}</td>
                        <td>{!! Html::link(route('portfolioEdit',['portfolio'=>$portfolio->id]),$portfolio->title,['alt'=>$portfolio->title]) !!}</td>
                        <td>{{ $portfolio->subtitle }}</td>
                        <td>{{ $portfolio->text }}</td>
                        <td>{{ $portfolio->image }}</td>
                        <td>{{ $portfolio->created_at }}</td>

                        <td>
                            {!! Form::open(['url'=>route('portfolioEdit',['portfolio'=>$portfolio->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}


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
        {!! Html::link(route('portfolioAdd'),'Новое изображение') !!}
            </div>
    </div>
</div>
