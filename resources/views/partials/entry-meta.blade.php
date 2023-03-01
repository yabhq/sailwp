<div class="flex items-center">
  {!! get_avatar( get_the_author_meta( 'ID' ), 96, args: [
    'class' => 'rounded-full w-14 h-14 mr-4'
  ] ) !!}
  <div>
    <p class="my-0 text-sm font-semibold">
      <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" class="p-author h-card">
        {{ get_the_author() }}
      </a>
    </p>
    <time class="text-gray-500 dark:text-gray-400 text-sm font-semibold" datetime="{{ get_post_time('c', true) }}">
      {{ get_the_date() }}
    </time>
  </div>
</div>
