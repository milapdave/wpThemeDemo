<?php
/*
Navbar search form
==================

If you don't want a search form in your navbar, then delete the link to this PHP page from within the navbar in header.php.

Then you can insert the Search Widget into the sidebar.
*/
?>
<form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <input class="form-control mr-sm-2" type="search" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="<?php esc_attr_x('Search', 'bst') ?>">Search</button>
</form>
