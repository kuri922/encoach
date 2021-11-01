<h1>編集</h1>

<form method = "POST" action ="/products/ {{$product -> id}}">
{{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <input type = "text" name = "name" value = "{{$product -> name}}">
        <input type = "number" name = "price" value = "{{$product -> price}}">
        <textarea name = "description" >{{$product -> description}}</textarea>

            <select name = "category_id">
            @foreach($categories as $category)
                @if ($category -> id == $product -> category_id)
                    <option value = "{{ $category -> id }}" selected> {{ $category -> name}}</option>

                @else
                    <option value = "{{ $category -> id }}"> {{ $category -> name}} </option>
                @endif
            @endforeach
            </select>
<button type = "submit">登録</button>
</form>

<a href = "/products">戻る</a>
