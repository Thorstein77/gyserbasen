<header>
    <div class="logo">
        <a href="index.php">
            <img src="images/Logo_hvid.png">
        </a>

    </div>

    <div class="menuBar">
        <a href="index.php">
            FORSIDE
        </a>
        <a href="blog_underside.php">
            BLOGS
        </a>
        <a href="movies.php">
            STREAMING
        </a>
    </div>


    <div class="dropDown">
        <button class="drop"><img src="images/menu.png"></button>

        <div class="dropDowncontent">
            <a href="index.php">
                <p>FORSIDE </p>
            </a>

            <a href="blog_underside.php">
                <p> BLOGS </p>
            </a>

            <a href="movies.php">
                <p>STREAMING</p>
            </a>
        </div>


    </div>
</header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$('.drop').click(function () {
$('.dropDowncontent').toggle("slow")
})
</script>