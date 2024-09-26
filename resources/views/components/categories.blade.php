<div>
    <ul class="categoriesWrapper">
        @foreach ($categories as $category)
        <li class="categoryItem">
            <a class="categoryAnchor" href="">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div>