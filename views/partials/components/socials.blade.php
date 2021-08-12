<div class="widget widget_social_buttons">
    @foreach(['facebook' => 'fa-facebook-f', 'instagram'=>'fa-instagram', 'twitter'=>'fa-twitter', 'google'=>'fa-google-plus', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play', 'spotify' => 'fa-spotify'] as $sk => $sv)
        @if(setting('theme::'.$sk) && $sk == 'whatsapp')
            <a rel="nofollow" class="fa {{ $sv }} color-icon" href="whatsapp:{{ setting('theme::'.$sk) }}"></a>
        @elseif(setting('theme::'.$sk))
            <a rel="nofollow" target="_blank" class="fa {{ $sv }} {{ $iconClass ?? '' }}" href="{{ setting('theme::'.$sk) }}"></a>
        @endif
    @endforeach
</div>