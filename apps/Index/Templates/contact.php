<?php
the_header(
    'Contact Us',
    'Get in touch with us for any inquiries or support.',
    'contact-page',
    [
        ['keywords', 'contact, support']
    ]
);
?>

<div class="container">
    <div class="contact">
        <h2 class="title">Contact FridgeBites</h2>

        <p>
            <h3 class="title"><i class="fa-solid fa-envelope"></i> Email:</h3>
            <a class="hover-anim" href="mailto:support@fridgebites.com">support@fridgebites.com</a>
        </p>

        <p>
            <h3 class="title"><i class="fa-solid fa-phone"></i> Phone:</h3>
            <a class="hover-anim" href="tel:+1234567890">+1 (234) 567-890</a>
        </p>

        <p class="address">
            <h3 class="title"><i class="fa-solid fa-location-dot"></i> Address:</h3>
            <p>Fridgebites HQ</p> 
            <p>123 Kitchen Street</p>
            <p>Flavor Town, FT 45678</p>
            <p>USA</p>
        </p>
    </div>
</div>
<?php the_footer(); ?>