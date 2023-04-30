<? // unset($_SESSION['loader']); ?>
<? if (!isset($_SESSION['loader']) || !$_SESSION['loader']): ?>
   <div class="preloader show">
      <div class="preloader_logo"><?=$site['name']?></div>
      <div class="preloader_inner">
         <div class="preloader_inner2"></div>
      </div>
   </div>
   <script>
      loader();
      function loader(_success) {
         var obj = document.querySelector('.preloader')
         t = setInterval(function() {
            obj.classList.remove('show');
            clearInterval(t);
            if (_success) return _success()
         }, 1500);
      }
   </script>
   <? $_SESSION['loader'] = true; ?>
<? endif ?>