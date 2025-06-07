<?php the_header(
    'Welcome',
    "Discover delicious recipes using the ingredients you already have. Fridgebites helps you create tasty meals with what's in your fridge",
    'frontpage',
    [
        ['robots', 'nofollow, noindex'],
        ['keywords', 'recipes, ingredients, recipe finder, fridge, fridge recipe, leftover recipes']
    ]
);
?>

<div class="container">
    <div class="quote">
        <h2><span class="black-qoute-word">Your</span> Fridge. <span class="black-qoute-word">Your</span> Rules.
            <span class="black-qoute-word">Our</span> Recipes.
        </h2>
    </div>
    <div class="latest-recipes">
        <h2 class="title">Latest Recipes Added</h2>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a href="#" class="recent-recipe hover-anim">
                        <div class="recipe-img">
                            <img src="media/recipe1.png" alt="Recipe 1" class="recipe-img__img">

                        </div>
                        <div class="recipe-info">
                            <p class="recipe-info__title">Spaghetti Bolognese</p>
                            <p class="recipe-info__meta"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="recent-recipe hover-anim">
                        <div class="recipe-img">
                            <img src="media/recipe1.jpeg" alt="Recipe 1" class="recipe-img__img">

                        </div>
                        <div class="recipe-info">
                            <p class="recipe-info__title">Spaghetti Bolognese</p>
                            <p class="recipe-info__meta"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="recent-recipe hover-anim">
                        <div class="recipe-img">
                            <img src="media/recipe1.jpeg" alt="Recipe 1" class="recipe-img__img">

                        </div>
                        <div class="recipe-info">
                            <p class="recipe-info__title">Spaghetti Bolognese</p>
                            <p class="recipe-info__meta"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                        </div>
                    </a>
                </div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>


        </div>

    </div>
    <div class="categories">
        <h2 class="title">Categories</h2>

        <div class="swiper categories-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="category hover-anim">
                        <div class="category-img">
                            <img src="media/category1.png" alt="Category 1" class="category-img__img">
                        </div>
                        <p class="category-title">Mexican</p>

                    </a>
                </div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>

    <div class="recent-reviews">
        <h2 class="title">Recent User Reviews</h2>
        <div class="reviews-grid">
            <a href="#" class="recent-review hover-anim">
                <div class="review-title">
                    <div class="review-img">
                        <img src="media/recipe1.jpeg" alt="reviewed recipe">
                    </div>
                    <h3 class="review-title-text">Just Like Mom's</h3>
                </div>
                <div class="review-text">
                    <p>I made this spaghetti last night and it was absolutely delicious! The sauce was rich and
                        flavorful—just the right balance of garlic, herbs, and tomato. I added a pinch of chili
                        flakes for a little kick, and it turned out perfect...</p>
                </div>
                <div class="review-meta meta">
                    <p class="review-author"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                    <p class="review-date"><i class="fa-solid fa-calendar-days"></i> 2023-10-01</p>
                </div>
            </a>
            <a href="#" class="recent-review hover-anim">
                <div class="review-title">
                    <div class="review-img">
                        <img src="media/recipe1.jpeg" alt="reviewed recipe">
                    </div>
                    <h3 class="review-title-text">Just Like Mom's</h3>
                </div>
                <div class="review-text">
                    <p>I made this spaghetti last night and it was absolutely delicious! The sauce was rich and
                        flavorful—just the right balance of garlic, herbs, and tomato. I added a pinch of chili
                        flakes for a little kick, and it turned out perfect...</p>
                </div>
                <div class="review-meta meta">
                    <p class="review-author"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                    <p class="review-date"><i class="fa-solid fa-calendar-days"></i> 2023-10-01</p>
                </div>
            </a><a href="#" class="recent-review hover-anim">
                <div class="review-title">
                    <div class="review-img">
                        <img src="media/recipe1.jpeg" alt="reviewed recipe">
                    </div>
                    <h3 class="review-title-text">Just Like Mom's</h3>
                </div>
                <div class="review-text">
                    <p>I made this spaghetti last night and it was absolutely delicious! The sauce was rich and
                        flavorful—just the right balance of garlic, herbs, and tomato. I added a pinch of chili
                        flakes for a little kick, and it turned out perfect...</p>
                </div>
                <div class="review-meta meta">
                    <p class="review-author"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                    <p class="review-date"><i class="fa-solid fa-calendar-days"></i> 2023-10-01</p>
                </div>
            </a><a href="#" class="recent-review hover-anim">
                <div class="review-title">
                    <div class="review-img">
                        <img src="media/recipe1.jpeg" alt="reviewed recipe">
                    </div>
                    <h3 class="review-title-text">Just Like Mom's</h3>
                </div>
                <div class="review-text">
                    <p>I made this spaghetti last night and it was absolutely delicious! The sauce was rich and
                        flavorful—just the right balance of garlic, herbs, and tomato. I added a pinch of chili
                        flakes for a little kick, and it turned out perfect...</p>
                </div>
                <div class="review-meta meta">
                    <p class="review-author"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                    <p class="review-date"><i class="fa-solid fa-calendar-days"></i> 2023-10-01</p>
                </div>
            </a><a href="#" class="recent-review hover-anim">
                <div class="review-title">
                    <div class="review-img">
                        <img src="media/recipe1.jpeg" alt="reviewed recipe">
                    </div>
                    <h3 class="review-title-text">Just Like Mom's</h3>
                </div>
                <div class="review-text">
                    <p>I made this spaghetti last night and it was absolutely delicious! The sauce was rich and
                        flavorful—just the right balance of garlic, herbs, and tomato. I added a pinch of chili
                        flakes for a little kick, and it turned out perfect...</p>
                </div>
                <div class="review-meta meta">
                    <p class="review-author"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                    <p class="review-date"><i class="fa-solid fa-calendar-days"></i> 2023-10-01</p>
                </div>
            </a><a href="#" class="recent-review hover-anim">
                <div class="review-title">
                    <div class="review-img">
                        <img src="media/recipe1.jpeg" alt="reviewed recipe">
                    </div>
                    <h3 class="review-title-text">Just Like Mom's</h3>
                </div>
                <div class="review-text">
                    <p>I made this spaghetti last night and it was absolutely delicious! The sauce was rich and
                        flavorful—just the right balance of garlic, herbs, and tomato. I added a pinch of chili
                        flakes for a little kick, and it turned out perfect...</p>
                </div>
                <div class="review-meta meta">
                    <p class="review-author"><i class="fa-solid fa-user"></i> GreenDavid004</p>
                    <p class="review-date"><i class="fa-solid fa-calendar-days"></i> 2023-10-01</p>
                </div>
            </a>
        </div>
    </div>
    <div class="daily-meals">
        <h2 class="title">Your Menu for Monday</h2>
        <div class="daily-meals-grid">
            <a href="#" class="daily-meal hover-anim">
                <div class="meal-img">
                    <img src="media/recipe1.jpeg" alt="meal-img">
                </div>
                <div class="daily-meal-info">
                    <div class="daily-meal-title">
                        <h3>Goulash</h3>
                        <span class="meta"><i class="fa-regular fa-clock"></i>120mins to make</span>
                    </div>
                    <div class="daily-meal-ingredients">
                        <ul class="ingredients-list">
                            <li>Ground beef</li>
                            <li>Tomato sauce</li>
                            <li>Onion</li>
                            <li>Macaroni</li>
                            <li>Garlic</li>
                            <li>Cheese</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a href="#" class="daily-meal hover-anim">
                <div class="meal-img">
                    <img src="media/recipe1.jpeg" alt="meal-img">
                </div>
                <div class="daily-meal-info">
                    <div class="daily-meal-title">
                        <h3>Goulash</h3>
                        <span class="meta"><i class="fa-regular fa-clock"></i>120mins to make</span>
                    </div>
                    <div class="daily-meal-ingredients">
                        <ul class="ingredients-list">
                            <li>Ground beef</li>
                            <li>Tomato sauce</li>
                            <li>Onion</li>
                            <li>Macaroni</li>
                            <li>Garlic</li>
                            <li>Cheese</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a href="#" class="daily-meal hover-anim">
                <div class="meal-img">
                    <img src="media/recipe1.jpeg" alt="meal-img">
                </div>
                <div class="daily-meal-info">
                    <div class="daily-meal-title">
                        <h3>Goulash</h3>
                        <span class="meta"><i class="fa-regular fa-clock"></i>120mins to make</span>
                    </div>
                    <div class="daily-meal-ingredients">
                        <ul class="ingredients-list">
                            <li>Ground beef</li>
                            <li>Tomato sauce</li>
                            <li>Onion</li>
                            <li>Macaroni</li>
                            <li>Garlic</li>
                            <li>Cheese</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a href="#" class="daily-meal hover-anim">
                <div class="meal-img">
                    <img src="media/recipe1.jpeg" alt="meal-img">
                </div>
                <div class="daily-meal-info">
                    <div class="daily-meal-title">
                        <h3>Goulash</h3>
                        <span class="meta"><i class="fa-regular fa-clock"></i>120mins to make</span>
                    </div>
                    <div class="daily-meal-ingredients">
                        <ul class="ingredients-list">
                            <li>Ground beef</li>
                            <li>Tomato sauce</li>
                            <li>Onion</li>
                            <li>Macaroni</li>
                            <li>Garlic</li>
                            <li>Cheese</li>
                        </ul>
                    </div>
                </div>
            </a>
            <a href="#" class="daily-meal hover-anim">
                <div class="meal-img">
                    <img src="media/recipe1.jpeg" alt="meal-img">
                </div>
                <div class="daily-meal-info">
                    <div class="daily-meal-title">
                        <h3>Goulash</h3>
                        <span class="meta"><i class="fa-regular fa-clock"></i>120mins to make</span>
                    </div>
                    <div class="daily-meal-ingredients">
                        <ul class="ingredients-list">
                            <li>Ground beef</li>
                            <li>Tomato sauce</li>
                            <li>Onion</li>
                            <li>Macaroni</li>
                            <li>Garlic</li>
                            <li>Cheese</li>
                        </ul>
                    </div>
                </div>
            </a><a href="#" class="daily-meal hover-anim">
                <div class="meal-img">
                    <img src="media/recipe1.jpeg" alt="meal-img">
                </div>
                <div class="daily-meal-info">
                    <div class="daily-meal-title">
                        <h3>Goulash</h3>
                        <span class="meta"><i class="fa-regular fa-clock"></i>120mins to make</span>
                    </div>
                    <div class="daily-meal-ingredients">
                        <ul class="ingredients-list">
                            <li>Ground beef</li>
                            <li>Tomato sauce</li>
                            <li>Onion</li>
                            <li>Macaroni</li>
                            <li>Garlic</li>
                            <li>Cheese</li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>

<?php the_footer(array(
    ASSETS_PATH . '/swiper/swiper-bundle.min.js',
    ASSETS_PATH . '/js/index.js',
)); ?>