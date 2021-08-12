@if ($breadcrumbs)
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('homepage') }}">Anasayfa</a>
        </li>
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li class="breadcrumb-item">
                    <a href="{{ $crumb->url }}">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</a>
                </li>
            @else
                <li class="breadcrumb-item active">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</li>
            @endif
        @endforeach
    </ol>
@endif