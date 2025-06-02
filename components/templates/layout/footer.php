
</div>

<footer>
    <hr>
    <div class="container">
        Footer
    </div>
    <hr>
    <div class="copyright">
        © LycoReco
    </div>
</footer>

<script src="<?php echo ASSETS_PATH . '/js/main.js' ?>"></script>
<script src="<?php echo ASSETS_PATH . '/toastify/toastify-js.js' ?>"></script>

<?php foreach($scripts as $script): ?>
<script src="<?php echo $script ?>"></script>
<?php endforeach; ?>

</body>
</html>