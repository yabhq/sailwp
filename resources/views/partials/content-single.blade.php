<article @php(post_class('h-entry'))>
  <header class="relative">
    <div class="container grid @if(has_post_thumbnail()) grid-cols-2 @endif">
      <div class="py-20 pr-10 @if(!has_post_thumbnail()) flex flex-col items-center @endif">
        @if($categories = get_the_category())
          <div class="space-x-2">
            @foreach($categories as $category)
              <a href="{{ get_category_link( $category->term_id ) }}" class="inline-flex h-9 bg-gray-200 hover:bg-gray-300 rounded-full items-center px-4 text-dark-900 dark:bg-white dark:bg-opacity-10 dark:hover:bg-opacity-5 dark:text-gray-100 text-xs font-semibold">
                {{ $category->name }}
              </a>
            @endforeach
          </div>
        @endif
        <h1 class="my-8 text-5xl font-semibold leading-snug">
          {!! $title !!}
        </h1>

        @include('partials.entry-meta')
      </div>
      @if(has_post_thumbnail())
        <div class="w-1/2 absolute top-0 right-0 -bottom-10">
          {{ the_post_thumbnail('full', ['class' => 'w-full h-full object-cover rounded-tl-[100px]']) }}
        </div>
      @endif
    </div>
  </header>

  <div class="bg-white text-slate-700 py-20">

    <div class="entry-content">
      @php(the_content())
    </div>

    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>

    @php(comments_template())

  </div>
</article>
