<?php
	$time = time() - 20;
?>
<!--[if lt IE 9]-->
<script src="libs/html5shiv/es5-shim.min.js"></script>
<script src="libs/html5shiv/html5shiv.min.js"></script>
<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="libs/respond/respond.min.js"></script>
<!--[endif]-->
<script
  src="http://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<script src="app/libs/main.js?<?php echo $time;?>"></script>
<script type="text/javascript" src="app/libs/wow.min.js"></script>
<script type="text/javascript">
    new WOW().init();
</script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script type="text/javascript">
    ymaps.ready(init);
    var myMap,
            myPlacemark;

    function init(){
        myMap = new ymaps.Map("map", {
            center: [56.272805, 43.889771
            ],
            zoom: 16
        });

        myPlacemark = new ymaps.Placemark([56.272805, 43.889771], {
            hintContent: 'Мы здесь!',
            balloonContent: 'Мы здесь'
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>

