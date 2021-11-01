@foreach($products as $product)
    {{$product -> name}}
    {{$product -> description}}
    {{$product -> price}}

    <a href = "{{route('products.show' , $product)}}">Show</a>
    <a href = "{{route('products.edit' , $product)}}">Edit</a>
        
        <form action = "/products/{{$product -> id }}" method = "POST" onsubmit ="if(confirm('本当に削除しても大丈夫ですか？')) { return true } else { return false };">
              <input type ="hidden" name ="_method" value = "DELETE">
              <input type ="hidden" name ="_token" value = "{{csrf_token( )}}">
              <button type = "submit">削除</button>
        </form>

    @endforeach

    <a href = "{{route('products.create')}}">新規作成</a>