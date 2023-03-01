@if (has_custom_logo())
  <a href="{{ get_bloginfo('url') }}" class="custom-logo-link" rel="home" aria-current="page">
    @php($logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' ))
    <img src="{{ $logo[0] }}" alt="{{ get_bloginfo('sitename') }}" class="custom-logo" />
    <img src="{{ get_theme_mod( 'inverse_logo' ) }}" alt="{{ get_bloginfo('sitename') }}" class="inverse-logo" />
  </a>
  <span class="sr-only">{{ get_bloginfo('sitename') }}</span>
@else
  @if(is_home())
    <h1 class="sitetitle">
      <a href="{{ get_bloginfo('url') }}">{{ get_bloginfo('sitename') }}</a>
    </h1>
  @else
    <p class="sitetitle">
      <a href="{{ get_bloginfo('url') }}">{{ get_bloginfo('sitename') }}</a>
    </p>
  @endif
@endif
