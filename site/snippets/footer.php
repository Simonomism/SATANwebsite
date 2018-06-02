  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="footer-madewithkirby">
        Le festival Visions est organisé par l'association <a href="http://www.lesdisquesanonymes.bandcamp.com">Les disques anonymes</a>. Cet évènement fonctionne sans subventions et l'ensemble de l'organisation travaille à titre bénévole. L'affiche est signée <a href="http://llcooljo.free.fr/">Jo Llcool</a>, le site internet <a href="www.simon-lepuissant.com">Simon Lepuissant</a>.
      </p>
    
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>$(document).ready(function(){
    $("button").click(function(){
        $("p").replaceWith(function(n){
            return "<h3>This element has index " + n + ".</h3>";
        });
    });});</script>
</body>
  <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
</html>