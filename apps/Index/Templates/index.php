<?php the_header(
    'Welcome', 
    'Discover and purchase top-rated games and software to elevate your entertainment and productivity. Explore our curated selection for the best deals and exclusive offers!', 
    'frontpage', 
    [
        ['robots', 'nofollow, noindex'],
        ['keywords', 'keys, programms, games, xbox, pc, playstation']
]); 
?>

<div class="container">
    Index page
</div>

<?php the_footer(array(
    ASSETS_PATH . '/swiper/swiper-bundle.min.js',
    ASSETS_PATH . '/js/index.js',
)); ?>