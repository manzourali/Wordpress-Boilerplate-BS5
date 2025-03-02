<div class="search-form-wrapper">
    <form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url('/') ?>">
        <i class="search-form-icon fa-solid fa-magnifying-glass"></i>
        <input type="search" name="s" id="" placeholder="Search..." value="<?php echo get_search_query(); ?>" autocomplete="off" class="search-form-input">
    </form>
</div>