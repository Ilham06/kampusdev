<div class="widget rounded">
    <div class="widget-header text-center">
        <h3 class="widget-title">Kategori</h3>

    </div>
    <div class="widget-content">
        <ul class="list">
            @foreach ($categories as $category)
                <li><a href="/project?category={{ $category->slug }}">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
