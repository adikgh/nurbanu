<? include "../../config/core.php";

	if ($_GET['v'] == 1) {
      $v = '7_C8q4ZYdVw';
      $name = 'Почему возникает кривошея, как не нужно лечить ее';
   }
	else if ($_GET['v'] == 2) {
      $v = 'oTMsRB6hn8Y';
      $name = 'Дистония, последствия';
	}
	else if ($_GET['v'] == 4) {
		$v = 'oTMsRB6hn8Y';
		$name = 'Основные ошибки, которые родители совершают до 6 месяцев';
	}


   // $site_set['header'] = false;
   // $site_set['footer'] = false;
   // $site_set['swiper'] = true;
   $site_set['plyr'] = true;
   $css = ['bonus'];
   // $js = ['course/mamapro'];
?>
<? include "../../block/header.php"; ?>

   <div class="">
      <div class="bl_c">
         <div class="bonus">
            <h4 class="bonus_name"><?=$name?></h4>
            <div class="bonus_c">
               <div class="bonus_l">
                  <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="<?=$v?>"></div>
               </div>
            </div>

         </div>
      </div>
   </div>

<? include "../../block/footer.php"; ?>

   <script>
      const player_o7 = new Plyr(".player_o7", {
         fullscreen: {iosNative: true},
         controls: ['play-large', 'play', 'progress', 'current-time',  'fullscreen'],
         poster: '/assets/img/result/chrome_0oD9KqL9vH.jpg',
      });
   </script>