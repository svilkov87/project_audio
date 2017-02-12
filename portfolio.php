<?php
include("include/connection.php");
//
//## проверка ошибок
//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Услуги</title>
    <?php include("include/head.php"); ?>
</head>
<body>
<?php include("include/modal.php"); ?>
<?php include("include/nav.php"); ?>
<div class="wrapp_portf">
    <div class="container">
        <div class="header_portf">
            <h1>Наши работы</h1>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="audio_items">
                <div class="img_n_desc">
                    <div class="col-md-6">
                        <img src="dist/img/audio_city.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="port_head_desc">
                            <h1>Our portfolio bla bla bla</h1>
                        </div>
                        <div class="portf_desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem beatae consequatur dolor
                            eaque eius excepturi fugiat illo laboriosam, magnam minima mollitia neque non nulla officiis
                            reiciendis repellendus tempore vitae!
                        </div>
                    </div>
                </div>
                <audio controls class="audio">
                    <source src="audio/Дима.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="audio_items">
                <div class="img_n_desc">
                    <div class="col-md-6">
                        <img src="dist/img/audio_city.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="port_head_desc">
                            <h1>Our portfolio bla bla bla</h1>
                        </div>
                        <div class="portf_desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem beatae consequatur dolor
                            eaque eius excepturi fugiat illo laboriosam, magnam minima mollitia neque non nulla officiis
                            reiciendis repellendus tempore vitae!
                        </div>
                    </div>
                </div>
                <audio controls class="audio">
                    <source src="audio/Дима.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="audio_items">
                <div class="img_n_desc">
                    <div class="col-md-6">
                        <img src="dist/img/audio_city.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="port_head_desc">
                            <h1>Our portfolio bla bla bla</h1>
                        </div>
                        <div class="portf_desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem beatae consequatur dolor
                            eaque eius excepturi fugiat illo laboriosam, magnam minima mollitia neque non nulla officiis
                            reiciendis repellendus tempore vitae!
                        </div>
                    </div>
                </div>
                <audio controls class="audio">
                    <source src="audio/Дима.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
        <div class="col-md-6 col-md-offset-3">
            <div class="audio_items">
                <div class="img_n_desc">
                    <div class="col-md-6">
                        <img src="dist/img/audio_city.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="port_head_desc">
                            <h1>Our portfolio bla bla bla</h1>
                        </div>
                        <div class="portf_desc">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab autem beatae consequatur dolor
                            eaque eius excepturi fugiat illo laboriosam, magnam minima mollitia neque non nulla officiis
                            reiciendis repellendus tempore vitae!
                        </div>
                    </div>
                </div>
                <audio controls class="audio">
                    <source src="audio/Дима.mp3" type="audio/mp3">
                </audio>
            </div>
        </div>
    </div>
</div>
<?php include("include/footer.php"); ?>
<?php include("include/scripts.php"); ?>
<script>
    $(function() {
        $('audio').on('play', function() {
            $('audio').addClass('stoped').removeClass('playing');
            $(this).removeClass('stoped').addClass('playing');
            $('.stoped').each(function() {
                $(this).trigger('pause');
                $(this)[0].currentTime = 0;
            })
        })
    })
</script>
</body>
</html>
