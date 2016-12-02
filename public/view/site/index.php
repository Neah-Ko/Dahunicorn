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

<div class="search">
  <h1>Je cherche</h1>
  <form class="searchLieu">
    Logement : <input type="checkbox" name="logement">
    Nourriture : <input type="checkbox" name="nourriture">
    Santé : <input type="checkbox" name="sante">
  </form>
</div>

<section class="">
  <div class="maps">
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
  </div>
</section>