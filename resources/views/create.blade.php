<form id="form1" method="post" action="/">
    @csrf
    <label>
        <input type="text" id="title" name="title" placeholder="title">
    </label>
    <label>
        <input type="text" id="text" name="text" placeholder="text">
    </label>
    <button type="submit">
        Добавить
    </button>
</form>
