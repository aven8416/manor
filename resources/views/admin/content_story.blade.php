<div class="container margin-t-40   ">
    <div style="margin:0px 50px 0px 50px;">

        @if($stories)

            <table class="table table-hover table-striped table-bordered ">
                <thead>
                <tr>
                    <th>№ п/п</th>
                    <th>Текст</th>
                    <th>Дата создания</th>
                    <th>Редактирование</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stories as $k => $story)
                    <tr>
                        <td>{{ $story->id }}</td>
                        <td>{{ $story->text}}</td>
                        <td>{{ $story->created_at }}</td>
                        <td>{!! Html::link(route('storyEdit',['story'=>$story->id]),'Редактировать',['alt'=>$story->id]) !!}</td>


                    </tr>

                @endforeach

                </tbody>
            </table>
        @endif

    </div>
</div>
