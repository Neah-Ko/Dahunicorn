<?php

$markers = [
    // TODO:

    'forum' => [
      'enabled'   => true,
      'latitude'  => 45.64088,
      'longitude' => 5.86948,
      'title'     => 'Forum des Entreprises',
      'content'   => 'Bâtiment Maurienne, Le Bourget du Lac, France',
      'color'     => '',
      'icon'      => '',
    ],
    'repas' => [
      'enabled'   => false,
      'latitude'  => 45.64144,
      'longitude' => 5.87047,
      'title'     => 'Repas de midi',
      'content'   => 'Bâtiment EVE / Agora, Le Bourget du Lac, France',
      'color'     => '',
      'icon'      => '',
    ],
    'olympiade' => [
      'enabled'   => false,
      'latitude'  => 45.64147,
      'longitude' => 5.87058,
      'title'     => 'Olympiades',
      'content'   => 'Bâtiment EVE / Agora, Le Bourget du Lac, France',
      'color'     => '',
      'icon'      => '',
    ],
    'gite' => [
      'enabled'   => true,
      'latitude'  => 45.39313,
      'longitude' => 5.84331,
      'title'     => 'Gîte',
      'content'   => 'Gite AROEVEN, Saint Pierre d\'Entremont, France',
      'color'     => '',
      'icon'      => '',
    ],
    'co' => [
      'enabled'   => false,
      'latitude'  => 45.41732,
      'longitude' => 5.85048,
      'title'     => 'Course d\'Orientation',
      'content'   => 'Saint Pierre d\'Entremont, France',
      'color'     => '',
      'icon'      => '',
    ],

  ];

?>

<section class="need-choice">
  <div class="title">
    What do you need first ?
  </div>
  <div class="selection">
    <paper-listbox>
      <paper-item>
        <img src="" alt="Logement" />
      </paper-item>
      <paper-item>
        <img src="" alt="Nourriture" />
      </paper-item>
      <paper-item>
        <img src="" alt="Santé" />
      </paper-item>
    </paper-listbox>
  </div>
</section>

<section class="search-result">
  <div class="maps">
    <paper-progress class="progress-cmp" indeterminate></paper-progress>
    <google-map class="maps-cmp" language="fr" min-zoom="7" latitude="45.525241" longitude="5.84505" fit-to-markers api-key="AIzaSyBTswMklmPyz-JLcu_L8gO2T_8pmucovM0">
      <?php foreach ($markers as $marker_name => $marker_data): ?>
        <?php if( isset( $marker_data['enabled'] ) && $marker_data['enabled'] ): ?>
        <google-map-marker
            class="<?= $marker_name ?>"
            latitude="<?= $marker_data['latitude'] ?>"
            longitude="<?= $marker_data['longitude'] ?>"
            title="<?= $marker_data['title'] ?>">
          <?= $marker_data['content'] ?>
        </google-map-marker>
      <?php endif; ?>
    <?php endforeach; ?>
    </google-map>
    <script type="text/javascript">
      var map = document.querySelector('google-map');
      var paper_progress = document.querySelector('paper-progress');
      map.addEventListener('google-map-ready', function(e) {
        paper_progress.classList.add("hide");
        map.classList.remove("ready");
      });
    </script>
  </div>
</section>
