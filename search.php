
<?php get_header(); ?>

<main id="site-content">

  <?php if (have_posts()) : ?>
    <header class="search-header">
      <h1 class="search-title">
        <?php printf(esc_html__('Search Results for: %s', 'textdomain'), '<span>' . get_search_query() . '</span>'); ?>
      </h1>
    </header>

    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <div class="pagination">
      <?php echo paginate_links(); ?>
    </div>

  <?php else : ?>
    <section class="no-results not-found">
      <h2><?php esc_html_e('Nothing Found', 'textdomain'); ?></h2>
      <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'textdomain'); ?></p>
    </section>
  <?php endif; ?>

</main>
<? get_footer();?>

