@if (! post_password_required())
  <section id="comments" class="comments border-t border-gray-300 py-20 mt-20">
    <div class="max-w-content mx-auto">
      @if (have_comments())
        <div x-data="{ show: false }">

          <div class="flex items-center justify-between">
            <h2 class="text-2xl font-semibold text-gray-900">
              {!! __('Comments', 'sail') !!}
            </h2>
            <button @click="show = !show" class="h-14 rounded-full bg-slate-100 inline-flex items-center px-8 text-base font-medium text-gray-900 hover:bg-slate-200">
              {!! __('Leave a Comment', 'sail') !!}
            </button>
          </div>

          <div x-show="show" class="mt-6 rounded bg-slate-100 p-8" x-transition>
            @php(comment_form())
          </div>

        </div>

        <ol class="comment-list mt-10">
          {!! wp_list_comments([
            'style' => 'ol',
            'short_ping' => true,
          ]) !!}
        </ol>

        @if (get_comment_pages_count() > 1 && get_option('page_comments'))
          <nav>
            <ul class="pager">
              @if (get_previous_comments_link())
                <li class="previous">
                  {!! get_previous_comments_link(__('&larr; Older comments', 'sage')) !!}
                </li>
              @endif

              @if (get_next_comments_link())
                <li class="next">
                  {!! get_next_comments_link(__('Newer comments &rarr;', 'sage')) !!}
                </li>
              @endif
            </ul>
          </nav>
        @endif
      @endif

      @if (! comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
        <x-alert type="warning">
          {!! __('Comments are closed.', 'sage') !!}
        </x-alert>
      @endif
    </div>
  </section>
@endif
