<?php

$var = mysqli_real_escape_string($db, $_GET["variable"]);
$dbMovie = mysqli_query($db, "SELECT * FROM movies WHERE 
      mId = '$var'");

$data = mysqli_fetch_assoc($dbMovie);
?>


<div class="backGroundImage">

    <h1><?php echo $data["mTitle"]; ?></h1>
    <h2 style="text-align: center;">(<?php echo $data["mYear"]; ?>)</h2>

    <div class="movie">

        <div class="movieposterTekst">

            <div class="movieposter">
                <img src="<?php echo $data["mImg"]; ?>">

                <a href="moviePlay.php" class="playBtn">
                    <i class="far fa-play-circle"></i>
                </a>
            </div>

            <div class="movieTekst">

            </div>

        </div>

        <div class="movieInfo">
            <ul>
                <li id="aarstal">
                    <p><b>Udgivelsesår</b></p>
                    <?php
                    echo $data["mYear"];
                    ?>
                </li>
                <li id="tid"></li>
                <li id="rating"></li>
                <li id="genre">
                    <p><b>Genrer</b></p>
                    <?php
                    echo $data["mGenre"];
                    ?>
                </li>
            </ul>
        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
    $(document).ready(function (e) {
        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://api.themoviedb.org/3/<?php
                echo $data["mApi"];
                ?>",
            data: {
                'api_key': '64b4491b45f63114a604290efac3e4e8',
                'language': 'da_DA'
            },

            success: function (result) {
                console.log(result);

                if(result.overview === ''){
                    $.ajax({
                        type: "GET",
                        dataType: "json",
                        url: "https://api.themoviedb.org/3/<?php
                            echo $data["mApi"];
                            ?>",
                        data: {
                            'api_key': '64b4491b45f63114a604290efac3e4e8',
                            'language': 'en-EN'
                        },

                        success: function (result) {
                            console.log(result);

                            $(".movieTekst").html("<p>" + result.overview + "</p>")
                            $("#tid").html("<p><b>Spilletid</b><br>" + result.runtime + " minutter</p>")
                            $("#rating").html("<p><b>Rating</b><br>" + result.vote_average + " / 10</p>")

                        },

                        error: function (error) {
                            console.log(error);
                        }
                    })
                }else{
                    $(".movieTekst").html("<p>" + result.overview + "</p>")
                    $("#tid").html("<p><b>Spilletid</b><br>" + result.runtime + " minutter</p>")
                    $("#rating").html("<p><b>Rating</b><br>" + result.vote_average + " / 10</p>")
                }
            },

            error: function (error) {
                console.log(error);
            }
        })
    });
</script>