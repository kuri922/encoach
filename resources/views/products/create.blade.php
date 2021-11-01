<h1>新規登録</h1>

<form method = "POST" action = "/products">
{{ csrf_field() }}
    <input type = "text" name ="name">
    <input type = "number" name = "price">
    <textarea  name ="description"></textarea>

        <select name = "category_id">
            @foreach($categories as $category)
                <option value = "{{ $category -> id }}"> {{$category -> name}} </option>
            @endforeach
        </select>
    <button type = "submit">登録</button>
</form>

<a href = "/products">戻る</a>