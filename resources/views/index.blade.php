<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>

        table {
            border-collapse: collapse;

            border: 1px solid black;
        }

        table td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
<table>
    <tr>
        <td align=center><big><b>id</b></big></td>
        <td align=center><big><b>title</b></big></td>
        <td align=center><big><b>text</b></big></td>
        <td align=center><big><b>created_at</b></big></td>
        <td align=center><big><b>updated_at</b></big></td>
        <td align=center><big><b><a href="/create">Создать</a></b></big></td>
    </tr>
    @foreach ($model as $key => $value)
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['title'] ?></td>
            <td><?php echo $value['text'] ?></td>
            <td align=center><?php echo (is_null($value['created_at'])) ? '-' : $value['created_at'] ?></td>
            <td align=center><?php echo (is_null($value['updated_at'])) ? '-' : $value['updated_at'] ?></td>
            <td align=center><big><b><a href="/edit/{{$value['id']}}">Редактировать</a></b></big></td>
            <td align=center><big><b><a onclick="myfunction({{$value['id']}});" href="#">Удалить</a></b></big></td>
        </tr>
    @endforeach
</table>

<script type="text/javascript">
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //     }
    // });

    function myfunction(id) {
        // fetch('/' + id, {
        //     method: 'delete',
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // }).then((res) => res.json())
        //     .then((response) => {
        //         console.log(response);
        //         window.location.href = '/';
        //     })
        $.ajax('/' + id, {
            type: 'delete',  // http method
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (data, status, xhr) {
                window.location.replace('/');

            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('p').append('Error' + errorMessage);
            }
        });
    }
</script>
</body>
