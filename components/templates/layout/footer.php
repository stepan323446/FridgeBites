</div>
<footer class="footer">
   <div class="container">
            <div class="footer-inner">
                <nav class="footer-nav">
                    <ul class="footer-links">
                        <li><a href="<?php the_permalink("index:terms")?>">Terms of Service</a></li>
                        <li><a href="<?php the_permalink("index:contact")?>">Contact</a></li>
                        <li><a href="<?php the_permalink("index:faq")?>">FAQ</a></li>
                        <li><a href="<?php the_permalink("admin:home")?>">Dashboard</a></li>
                    </ul>
                </nav>
                <hr>
                <div class="copyright">
                    <p>&copy;LycoReco</p>
                </div>
            </div>
        </div>
</footer>

<script src="<?php echo ASSETS_PATH . '/js/main.js' ?>"></script>
<script src="<?php echo ASSETS_PATH . '/toastify/toastify-js.js' ?>"></script>

<?php foreach($scripts as $script): ?>
<script src="<?php echo $script ?>"></script>
<?php endforeach; ?>

</body>
</html>