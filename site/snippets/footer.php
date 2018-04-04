  <footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

      <p class="footer-copyright"><?php
        // Parse Kirbytext to support dynamic year,
        // but remove all HTML like paragraph tags:
        echo html::decode($site->copyright()->kirbytext())
      ?></p>

      <p class="footer-madewithkirby">
        <img src="../assets/images/fb.png" />
        Le festival Visions est organisé par l'association <a href="http://www.lesdisquesanonymes.bandcamp.com">Les disques anonymes</a>. Cet évènement fonctionne sans subventions et l'ensemble de l'organisation travaille à titre bénévole.<br><br>
        Ce site internet a été réalisé par <a href="www.simon-lepuissant.com">Simon Lepuissant</a> à partir du <a href="www.getkirby.com">CMS Kirby</a>. Les titres sont composés en "Combat" dessiné par <a href="http://martindesinde.tumblr.com/">Martin Desinde</a>, édité par <a href="https://velvetyne.fr/">Velvetyne Type Foundry</a> et le corps du texte en "Karla" dessiné par Jonny Pinhorn. L'affiche du festival est signée Jo Llcool.
      </p>
    
    </div>
  </footer>

</body>
</html>