<? include "../../config/core.php";

   // _VN4DzP17T4




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
            <h4 class="bonus_name">Еңбектеуге қажетті рефлекстер</h4>
            <div class="bonus_c">
               <div class="bonus_l">
                  <div class="player_o7" data-plyr-provider="youtube" data-plyr-embed-id="_VN4DzP17T4"></div>
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