<!doctype html>
<html <?php language_attributes(); ?> class="no-js scroll-smooth motion-reduce:scroll-auto md:scroll-pt-40">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class('antialiased bg-slate-100 dark:bg-slate-900 dark:text-white text-gray-700 font-sans'); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
