<?php
/**
 * Template Name: Contact Template
 */
?>
<?php use Roots\Sage\Titles; ?>
<?php while (have_posts()) : the_post(); ?>
<header id="masthead" class="masthead masthead--thin">
    <figure class="masthead__bg masthead__bg--fullwidth">
        <?php if(has_post_thumbnail()) : the_post_thumbnail('xlarge'); else: ?>
            <img src="<?= get_stylesheet_directory_uri().'/dist/images/contacthead.jpg'; ?>" alt="Kontakt">
        <?php endif; ?>
    </figure>
</header>
<div class="ps--light">
    <div class="grid-container">
        <h1 class="tapetitle"><?= Titles\title(); ?></h1>
    </div>
</div>



<div class="grid-container ps">
    <div class="grid-x grid-margin-x">
        <div class="cell tablet-6">
                <div class="bodycopy">
                    <?php if (has_excerpt()) : ?>
                    <?php the_excerpt() ?>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
        </div>
        <div class="cell tablet-6">
            <?php the_field('addtext'); ?>
        </div><!-- /.sidebar -->
    </div>
    <br>
    <hr aclass="fulldivider">
    <br>
    <div id="map" class="mapcanvas"></div>
</div>
<?php endwhile; ?>

<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnOvBvXqpXIOwfS5YHXCO-5pKFSAI0aqc&sensor=false"></script>
<script type="text/javascript">
//   var map;
//   var map2;
function initialize() {
    var latlng = new google.maps.LatLng(44.815689, 20.239069);
    var myOptions = {
        zoom: 15,
        //center: latlng,
        disableDefaultUI: false,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
            "featureType": "administrative",
            "elementType": "labels",
            "stylers": [
                // { "visibility": "off" }
            ]
        }, {
            "featureType": "landscape",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ececec"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#dadada"
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry.fill",
            "stylers": [{
                    "color": "#c6c6c6"
                },
                {
                    "visibility": "on"
                }
            ]
        }, {
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "elementType": "labels.text",
            "stylers": [{
                    "weight": 0.1
                },
                {
                    "color": "#606060"
                }
            ]
        }, {
            "featureType": "administrative.locality",
            "elementType": "labels.text",
            "stylers": [{
                "color": "#4e4e4e"
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [{
                    "color": "#e0001b"
                },
                {
                    "weight": 0.25
                }
            ]
        }, {
            "featureType": "road.highway",
            "elementType": "labels.icon",
            "stylers": [
                // { "visibility": "off" }
            ]
        }]
    };
    myOptions["center"] = latlng;
    var map = new google.maps.Map(document.getElementById('map'), myOptions);
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        title: "SDT GROUP"
        //shadow:shadow
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>


