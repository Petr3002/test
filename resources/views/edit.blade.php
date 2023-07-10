<form id="form2" method="post" action="/put/{{ $model->id }}">
    @csrf
    <label for="title"><h2>title</h2></label>
        <input value="{{$model->title}}" type="text" id="title" name="title" placeholder="title">
    <label for="text"><h2>text</h2></label>
        <input value="{{$model->text}}" type="text" id="text" name="text" placeholder="text">
    <button type="submit">
        Обновить
    </button>
</form>
