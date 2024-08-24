<?php 
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
   
    <input type="search" class="search-input" placeholder="<?php echo esc_attr_x('Search Website', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" id="search-input" />

    <button type="submit" class="search-submit" id="search-submit" >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="14"
        height="14"
        fill="#818181"
        viewBox="0 0 256 256"
        class="icon-search"
      >
      <path
        d="M232.49,215.51,185,168a92.12,92.12,0,1,0-17,17l47.53,47.54a12,12,0,0,0,17-17ZM44,112a68,68,0,1,1,68,68A68.07,68.07,0,0,1,44,112Z"
      ></path>
      </svg>
    </button>
</form>

