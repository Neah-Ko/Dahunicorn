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


<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCw3j24INjRLtWf3fAlKnWC4GtksBIMiHs'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.org/'>google maps embedded</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=aff112c57315aa96ee4c4536fd6cd844e6ac64d5'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(45.5646,5.926500000000033),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(45.5646,5.926500000000033)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br><br> Chambéry<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

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
