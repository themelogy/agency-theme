<div class="filters gallery-filters small-text text-lg-right">
    <a href="#" data-filter="*" class="active selected">Tümü</a>
    @foreach($categories as $category)
    <a href="#" data-filter=".{{ $category->slug }}">{{ $category->title }}</a>
    @endforeach
</div>