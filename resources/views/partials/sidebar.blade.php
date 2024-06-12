<div class="page-sidebar">
    <ul class="list-unstyled accordion-menu">
        <li class="sidebar-title">
            Main Features
        </li>
        @foreach (config('sidebar.items') as $sidebar)
            @if ($sidebar['hasChild'])
                <li class="my-1">
                    <a href="#"><i data-feather="{{ $sidebar['icon'] }}"></i>{{ $sidebar['label'] }}<i
                            class="fas fa-chevron-right dropdown-icon"></i></a>
                    <ul class="">

                        @foreach ($sidebar['children'] as $children)
                            <li><a href="dashboard{{ $children['url'] }}"><i class="far fa-circle"></i>{{ $children['label'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="my-1">
                    <a href="dashboard{{ $sidebar['url'] }}"><i
                            data-feather="{{ $sidebar['icon'] }}"></i>{{ $sidebar['label'] }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>
