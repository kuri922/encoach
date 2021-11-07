
<div class="container m-3">
    @foreach ($major_category_names as $major_category_name)
    
        <h2>{{ $major_category_name }}</h2>
        @foreach ($categories as $category)
            @if ($category->major_category_name === $major_category_name)
                <label class="encoach-sidebar-category-label"><a href="{{ route('products.index' , ['category' => $category -> id]) }}">{{ $category->name }}</a></label>
            @endif
        @endforeach
    @endforeach
</div>
</nav>


