<footer>
        <p>&copy; <?php
                    // set the default timezone to use.
                    date_default_timezone_set('UTC');
                    echo date('Y');
                    ?>
            <small>Built with - <a><?php include './src/images/MaterialSymbolsPhpSharp.svg' ?></a></small>
            <br />
            <a id="html-checker" target="_blank" href="#"><b>Valid HTML</b></a> ~
            <a id="css-checker" target="_blank" href="#"><b>ValidCSS</b></a>
        </p>

    </footer>

    <script>
    document.getElementById("html-checker").setAttribute("href", "https://validator.w3.org/nu/?doc=" +
        location.href);
    document.getElementById("css-checker").setAttribute("href",
        "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
</script>

</body>
</html>