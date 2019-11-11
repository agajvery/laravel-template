@foreach($menuItems as $item )
    <li class="nav-item" {{ $item->hasChildren() ? "has-treeview" : "" }}>
        <a href="{{ $item->url()}}" class="nav-link">
            <i class="fas fa-circle nav-icon"></i>
            <p>{{ $item->title }}</p>
        </a>
        @if($item->hasChildren())
            <ul class="nav">
                @include('adminlte.partials.left-menu', ['menuItems' => $item->children()])
            </ul>
        @endif
    </li>
@endforeach
