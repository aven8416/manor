<div class="container margin-t-40   ">
    <div style="margin:0px 50px 0px 50px;">

        @if($links)

            <table class="table table-hover table-striped table-bordered ">
                <thead>
                <tr>
                    <th>№ п/п</th>
                    <th>Ccылка</th>
                    <th>Дата создания</th>
                    <th>Редактирование</th>
                </tr>
                </thead>
                <tbody>
                @foreach($links as $k => $link)
                    <tr>
                        <td>{{ $link->id }}</td>
                        <td>{{ $link->name}}</td>
                        <td>{{ $link->created_at }}</td>
                        <td>{!! Html::link(route('videoEdit',['video'=>$link->id]),'Редактировать',['alt'=>$link->id]) !!}</td>


                    </tr>

                @endforeach

                </tbody>
            </table>
        @endif

    </div>
</div>
