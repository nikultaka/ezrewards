(function ($) {
  "use strict";

  var Mighty_Addons_Pro = {

    Mighty_Particles: function ( $scope, $ ) {
      
      if ($scope.hasClass('mighty-particles-yes')) {
        var particlesType = {
          "default": {
            "particles": {
              "number": {
                "value": 80,
                "density": {
                  "enable": true,
                  "value_area": 800
                }
              },
              "color": {
                "value": "#ffffff"
              },
              "shape": {
                "type": "circle",
                "stroke": {
                  "width": 0,
                  "color": "#000000"
                },
                "polygon": {
                  "nb_sides": 5
                },
                "image": {
                  "src": "img/github.svg",
                  "width": 100,
                  "height": 100
                }
              },
              "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                  "enable": false,
                  "speed": 1,
                  "opacity_min": 0.1,
                  "sync": false
                }
              },
              "size": {
                "value": 3,
                "random": true,
                "anim": {
                  "enable": false,
                  "speed": 40,
                  "size_min": 0.1,
                  "sync": false
                }
              },
              "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
              },
              "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                  "enable": false,
                  "rotateX": 600,
                  "rotateY": 1200
                }
              }
            },
            "interactivity": {
              "detect_on": "canvas",
              "events": {
                "onhover": {
                  "enable": true,
                  "mode": "repulse"
                },
                "onclick": {
                  "enable": true,
                  "mode": "push"
                },
                "resize": true
              },
              "modes": {
                "grab": {
                  "distance": 400,
                  "line_linked": {
                    "opacity": 1
                  }
                },
                "bubble": {
                  "distance": 400,
                  "size": 40,
                  "duration": 2,
                  "opacity": 8,
                  "speed": 3
                },
                "repulse": {
                  "distance": 200,
                  "duration": 0.4
                },
                "push": {
                  "particles_nb": 4
                },
                "remove": {
                  "particles_nb": 2
                }
              }
            },
            "retina_detect": true
          },
          "nasa": {
            "particles": {
              "number": {
                "value": 160,
                "density": {
                  "enable": true,
                  "value_area": 800
                }
              },
              "color": {
                "value": "#ffffff"
              },
              "shape": {
                "type": "circle",
                "stroke": {
                  "width": 0,
                  "color": "#000000"
                },
                "polygon": {
                  "nb_sides": 5
                },
                "image": {
                  "src": "img/github.svg",
                  "width": 100,
                  "height": 100
                }
              },
              "opacity": {
                "value": 1,
                "random": true,
                "anim": {
                  "enable": true,
                  "speed": 1,
                  "opacity_min": 0,
                  "sync": false
                }
              },
              "size": {
                "value": 3,
                "random": true,
                "anim": {
                  "enable": false,
                  "speed": 4,
                  "size_min": 0.3,
                  "sync": false
                }
              },
              "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
              },
              "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                  "enable": false,
                  "rotateX": 600,
                  "rotateY": 600
                }
              }
            },
            "interactivity": {
              "detect_on": "canvas",
              "events": {
                "onhover": {
                  "enable": true,
                  "mode": "bubble"
                },
                "onclick": {
                  "enable": true,
                  "mode": "repulse"
                },
                "resize": true
              },
              "modes": {
                "grab": {
                  "distance": 400,
                  "line_linked": {
                    "opacity": 1
                  }
                },
                "bubble": {
                  "distance": 250,
                  "size": 0,
                  "duration": 2,
                  "opacity": 0,
                  "speed": 3
                },
                "repulse": {
                  "distance": 400,
                  "duration": 0.4
                },
                "push": {
                  "particles_nb": 4
                },
                "remove": {
                  "particles_nb": 2
                }
              }
            },
            "retina_detect": true
          },
          "bubble": {
            "particles": {
              "number": {
                "value": 6,
                "density": {
                  "enable": true,
                  "value_area": 800
                }
              },
              "color": {
                "value": "#1b1e34"
              },
              "shape": {
                "type": "polygon",
                "stroke": {
                  "width": 0,
                  "color": "#000"
                },
                "polygon": {
                  "nb_sides": 6
                },
                "image": {
                  "src": "img/github.svg",
                  "width": 100,
                  "height": 100
                }
              },
              "opacity": {
                "value": 0.3,
                "random": true,
                "anim": {
                  "enable": false,
                  "speed": 1,
                  "opacity_min": 0.1,
                  "sync": false
                }
              },
              "size": {
                "value": 160,
                "random": false,
                "anim": {
                  "enable": true,
                  "speed": 10,
                  "size_min": 40,
                  "sync": false
                }
              },
              "line_linked": {
                "enable": false,
                "distance": 200,
                "color": "#ffffff",
                "opacity": 1,
                "width": 2
              },
              "move": {
                "enable": true,
                "speed": 8,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                  "enable": false,
                  "rotateX": 600,
                  "rotateY": 1200
                }
              }
            },
            "interactivity": {
              "detect_on": "canvas",
              "events": {
                "onhover": {
                  "enable": false,
                  "mode": "grab"
                },
                "onclick": {
                  "enable": false,
                  "mode": "push"
                },
                "resize": true
              },
              "modes": {
                "grab": {
                  "distance": 400,
                  "line_linked": {
                    "opacity": 1
                  }
                },
                "bubble": {
                  "distance": 400,
                  "size": 40,
                  "duration": 2,
                  "opacity": 8,
                  "speed": 3
                },
                "repulse": {
                  "distance": 200,
                  "duration": 0.4
                },
                "push": {
                  "particles_nb": 4
                },
                "remove": {
                  "particles_nb": 2
                }
              }
            },
            "retina_detect": true
          },
          "snow": {
            "particles": {
              "number": {
                "value": 400,
                "density": {
                  "enable": true,
                  "value_area": 800
                }
              },
              "color": {
                "value": "#fff"
              },
              "shape": {
                "type": "circle",
                "stroke": {
                  "width": 0,
                  "color": "#000000"
                },
                "polygon": {
                  "nb_sides": 5
                },
                "image": {
                  "src": "img/github.svg",
                  "width": 100,
                  "height": 100
                }
              },
              "opacity": {
                "value": 0.5,
                "random": true,
                "anim": {
                  "enable": false,
                  "speed": 1,
                  "opacity_min": 0.1,
                  "sync": false
                }
              },
              "size": {
                "value": 10,
                "random": true,
                "anim": {
                  "enable": false,
                  "speed": 40,
                  "size_min": 0.1,
                  "sync": false
                }
              },
              "line_linked": {
                "enable": false,
                "distance": 500,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 2
              },
              "move": {
                "enable": true,
                "speed": 6,
                "direction": "bottom",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                  "enable": false,
                  "rotateX": 600,
                  "rotateY": 1200
                }
              }
            },
            "interactivity": {
              "detect_on": "canvas",
              "events": {
                "onhover": {
                  "enable": true,
                  "mode": "bubble"
                },
                "onclick": {
                  "enable": true,
                  "mode": "repulse"
                },
                "resize": true
              },
              "modes": {
                "grab": {
                  "distance": 400,
                  "line_linked": {
                    "opacity": 0.5
                  }
                },
                "bubble": {
                  "distance": 400,
                  "size": 4,
                  "duration": 0.3,
                  "opacity": 1,
                  "speed": 3
                },
                "repulse": {
                  "distance": 200,
                  "duration": 0.4
                },
                "push": {
                  "particles_nb": 4
                },
                "remove": {
                  "particles_nb": 2
                }
              }
            },
            "retina_detect": true
          }
        };

        var id = $scope.data('id'),
            element_type = $scope.data('element_type'),
            sel = elementorFrontend.isEditMode() ? $scope.find('.mighty-particles-wrapper') : $scope,
            chosenParticlesType = sel.data('particles-type'),
            particlesData = chosenParticlesType !== "custom" ? particlesType[chosenParticlesType] : sel.data('mighty-particles');

        if (typeof particlesData != 'undefined' && particlesData != '') {

          if (sel.data('particles-type') !== "custom") {
            var particlesColor = sel.data('particles-color'),
              particlesOpacity = sel.data('particles-opacity');

            particlesData.particles.color.value = particlesColor;
            particlesData.particles.opacity.value = particlesOpacity;
          }

          if (sel.data('particles-advance') === "yes" && sel.data('particles-type') !== "custom") {

            var particlesCount = sel.data('particles-count'),
                particlesSize = sel.data('particles-size'),
                particlesSpeed = sel.data('particles-speed'),
                particlesInteractivity = sel.data('particles-interactivity') === true ? true : false;

            particlesData.particles.number.value = particlesCount;
            particlesData.particles.size.value = particlesSize;
            particlesData.particles.move.speed = particlesSpeed;
            particlesData.interactivity.events.onclick.enable = particlesInteractivity;
            particlesData.interactivity.events.onhover.enable = particlesInteractivity;
          }

          if (element_type == 'column') {
            $scope.find('.elementor-column-wrap').prepend('<div class="mighty-particles-wrapper"' + ' id="mighty-particles-' + id + '"></div>');
          } else {
            $scope.prepend('<div class="mighty-particles-wrapper" id="mighty-particles-' + id + '"></div>');
          }
          new particlesJS('mighty-particles-' + id, particlesData);
        }
      }
    },

    Mighty_SectionSlider: function ( $scope, $ ) {
      
      if ( $scope.hasClass( 'mighty-section-slider-yes' ) ) {
        
        var sel = elementorFrontend.isEditMode() ? $scope.find('.mighty-section-slider-wrapper') : $scope;
        var sliderSelector;

        if( $scope.find('.elementor-top-column > .elementor-column-wrap > .elementor-widget-wrap').length ) {
          sliderSelector = $scope.find('.elementor-top-column > .elementor-column-wrap > .elementor-widget-wrap')
        } else {
          // For live sites, elemenetor removes '.elementor-column-wrap' div on a live site
          sliderSelector = $scope.find('.elementor-top-column > .elementor-widget-wrap');
        }

        if( elementorFrontend.isEditMode() && sliderSelector.find('.elementor-background-overlay')[0] !== undefined ) {
          sliderSelector.find('.elementor-background-overlay')[0].remove();
        }

        var enableDots = Boolean( sel.data( 'enable-dots' ) );
        var enableArrows = Boolean( sel.data( 'enable-arrows' ) );
        var enableDragging = sel.data( 'enable-dragging' ) == 'yes' ? true : false;
        var enableFade = sel.data( 'enable-fade' ) == 'yes' ? true : false;
        var enablePauseOnHover = sel.data( 'enable-pause-hover' ) == 'yes' ? true : false;
        var enableInfiniteSliding = sel.data( 'enable-infinite-sliding' ) == 'yes' ? true : false;
        var enableAutoplay = sel.data( 'enable-autoplay' ) == 'yes' ? true : false;
        var autoplaySpeed = sel.data( 'autoplay-speed' );
        var slidingSpeed = sel.data( 'sliding-speed' );
        var enableAdaptiveHeight = sel.data( 'enable-adaptive-height' ) == 'yes' ? true : false;

        if ( enableArrows ) {
          $( sliderSelector ).after('<div class="prev-next prev-icon' + ( sel.data( 'custom-prev-arrow' ) ? ' custom-enable' : '' ) +'"><a class="prev" role="button"><i class="' + sel.data('prev-icon') + '"></i></a></div>');
          $( sliderSelector ).after('<div class="prev-next next-icon' + ( sel.data( 'custom-next-arrow' ) ? ' custom-enable' : '' ) +'"><a class="next" role="button"><i class="' + sel.data('next-icon') + '"></i></a></div>');
        }

        $( sliderSelector ).slick({
          dots: enableDots,
          arrows: enableArrows,
          draggable: enableDragging,
          fade: enableFade,
          pauseOnHover: enablePauseOnHover,
          infinite: enableInfiniteSliding,
          autoplay: enableAutoplay,
          autoplaySpeed: autoplaySpeed,
          speed: slidingSpeed,
          adaptiveHeight: enableAdaptiveHeight,
          prevArrow: $scope.find('.prev-next .prev'),
          nextArrow: $scope.find('.prev-next .next'),
        });

      }
    },

    Mighty_Openstreet: function ( $scope, $ ) {

      var sel = $scope.find('.mighty-openstreet-map'),
          mapId = sel.data('id');

      var locations = sel.data('locations'),
          enableScrollZoom = sel.data('enable-scroll-zoom') == "yes" ? true : false,
          enableTouchZoom = sel.data('enable-touch-zoom') == "yes" ? true : false,
          enableDblclickZoom = sel.data('enable-dblclick-zoom') == "yes" ? true : false,
          showZoomControl = sel.data('show-zoom-controls') == "yes" ? true : false,
          zoom = sel.data('zoom'),
          mapStyle = sel.data('map-style'),
          defaultMarker = MightyAddonsPro.baseUrl + 'assets/images/marker-icon.png',
          enableDrag = sel.data('enable-drag') == "yes" ? true : false,
          showAttribution = sel.data('show-attribution') == "yes" ? true : false,
          icon;
        
      var layer = L.tileLayer.provider(mapStyle);
      
      var map = L.map('mighty-openstreet-' + mapId, {
        center: [ locations[0]['osm_latitude'], locations[0]['osm_longitude'] ],
        layers: [ layer ],
        zoom: zoom,
        zoomControl: showZoomControl,
        scrollWheelZoom: enableScrollZoom,
        touchZoom: enableTouchZoom,
        doubleClickZoom: enableDblclickZoom,
        dragging: enableDrag,
        attributionControl: showAttribution,
      });

      for( var i = 0; i < locations.length; i++ ) {

        if ( locations[i]['osm_marker_icon_type'] == "custom" ) {
          if ( locations[i]['osm_marker_icon']['url'] == "" ) {
            icon = defaultMarker;
          } else {
            icon = locations[i]['osm_marker_icon']['url']
          }
        } else {
          icon = defaultMarker;
        }

        var marker = L.marker(
          [ locations[i]['osm_latitude'], locations[i]['osm_longitude'] ],
          { icon: L.icon({
            iconUrl: icon,
            iconSize: [ locations[i]['osm_marker_size']['size'] ],
          }) }
        )
        .addTo(map);

        var popup = "<h3 class='info-title'>" + locations[i]['osm_popup_title'] + "</h3><p class='info-description'>" + locations[i]['osm_popup_description'] + "</p>";

        if ( locations[i]['osm_popup_options'] == "mouse-click" ) {

          marker.bindPopup(popup);

        } else if ( locations[i]['osm_popup_options'] == "page-load" ) {

          if ( locations[i]['osm_locations'] !== '' ) {
            marker.bindPopup(popup).openPopup();
          }
          
        }
      }
    },

    Mighty_Googlemaps: function( $scope, $ ) {
      var sel = $scope.find('.mighty-google-map');
      var gmapsKey = sel.data('gmaps-key');
      if( gmapsKey == null || gmapsKey == '' || gmapsKey == undefined ) {
        return; // No 🔑 found
      }
      var mapId = sel.data('id');
      var locations = sel.data('locations');
      var zoom = sel.data('zoom');
      var showZoomControl = sel.data('show-zoom-control') == "yes" ? true : false;
      var showMaptypeControl = sel.data('show-maptype-control') == "yes" ? true : false;
      var showScaleControl = sel.data('show-scale-control') == "yes" ? true : false;
      var showStreetViewControl = sel.data('show-streetview-control') == "yes" ? true : false;
      var showFullScreenControl = sel.data('show-fullscreen-control') == "yes" ? true : false;
      var enableScrollZoom = sel.data('enable-scroll-zoom') == "yes" ? true : false;
      var mapType = sel.data('map-type');
      var chosenStyle = sel.data('map-style');
      var icon;
      var mapTheme;
      var markerAnimation = sel.data('map-marker-animation');
      var mapStyles = {
        "silver": [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#c9c9c9"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ],
        "retro": [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ebe3cd"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#523735"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f1e6"
              }
            ]
          },
          {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#c9b2a6"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#dcd2be"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#ae9e90"
              }
            ]
          },
          {
            "featureType": "landscape.natural",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#93817c"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#a5b076"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#447530"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f1e6"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#fdfcf8"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f8c967"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#e9bc62"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e98d58"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#db8555"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#806b63"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#8f7d77"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#ebe3cd"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dfd2ae"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#b9d3c2"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#92998d"
              }
            ]
          }
        ],
        "dark": [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#212121"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#212121"
              }
            ]
          },
          {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "administrative.country",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "featureType": "administrative.locality",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#181818"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#1b1b1b"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#2c2c2c"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#8a8a8a"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#373737"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#3c3c3c"
              }
            ]
          },
          {
            "featureType": "road.highway.controlled_access",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#4e4e4e"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "transit",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#000000"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#3d3d3d"
              }
            ]
          }
        ],
        "night": [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#242f3e"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#746855"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#242f3e"
              }
            ]
          },
          {
            "featureType": "administrative.locality",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#d59563"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#d59563"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#263c3f"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#6b9a76"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#38414e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#212a37"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9ca5b3"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#746855"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#1f2835"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#f3d19c"
              }
            ]
          },
          {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#2f3948"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#d59563"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#17263c"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#515c6d"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#17263c"
              }
            ]
          }
        ],
        "aubergine": [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#1d2c4d"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#8ec3b9"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#1a3646"
              }
            ]
          },
          {
            "featureType": "administrative.country",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#4b6878"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#64779e"
              }
            ]
          },
          {
            "featureType": "administrative.province",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#4b6878"
              }
            ]
          },
          {
            "featureType": "landscape.man_made",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#334e87"
              }
            ]
          },
          {
            "featureType": "landscape.natural",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#023e58"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#283d6a"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#6f9ba5"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#1d2c4d"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#023e58"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#3C7680"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#304a7d"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#98a5be"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#1d2c4d"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#2c6675"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
              {
                "color": "#255763"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#b0d5ce"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#023e58"
              }
            ]
          },
          {
            "featureType": "transit",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#98a5be"
              }
            ]
          },
          {
            "featureType": "transit",
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#1d2c4d"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry.fill",
            "stylers": [
              {
                "color": "#283d6a"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#3a4762"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#0e1626"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#4e6d70"
              }
            ]
          }
        ]
      };
      var bounds = new google.maps.LatLngBounds();

      switch( sel.data('map-type') ) {
        case 'ROADMAP': mapType = google.maps.MapTypeId.ROADMAP;
        break;
        case 'SATELLITE': mapType = google.maps.MapTypeId.SATELLITE;
        break;
        case 'HYBRID': mapType = google.maps.MapTypeId.HYBRID;
        break;
        case 'TERRAIN': mapType = google.maps.MapTypeId.TERRAIN;
        break;
      }

      if ( chosenStyle == "custom" ) {
        mapTheme = sel.data('map-style-custom');
      } else {
        mapTheme = mapStyles[chosenStyle];
      }

      var latitude = locations[0]['gmaps_search_type'] == "search" ? Number( locations[0]['gmaps_location_search']['gmaps_latitude'] ) : Number( locations[0]['gmaps_latitude']);
      var longitude = locations[0]['gmaps_search_type'] == "search" ? Number( locations[0]['gmaps_location_search']['gmaps_longitude'] ) : Number( locations[0]['gmaps_longitude']);

      // Defaults
      if( isNaN(latitude) ) {
        latitude = 28.6469655;
        longitude = 77.0932634;
      }

      var config = {
        center: {
          lat: latitude,
          lng: longitude
        },
        zoomControl: showZoomControl,
        mapTypeControl: showMaptypeControl,
        scaleControl: showScaleControl,
        streetViewControl: showStreetViewControl,
        fullscreenControl: showFullScreenControl,
        scrollwheel: enableScrollZoom,
        mapTypeId: mapType,
        styles: mapTheme,
      };

      // No zoom for map bounds
      if ( zoom !== "" ) {
        config['zoom'] = zoom;
      }

      var map = new google.maps.Map( document.getElementById( 'mighty-gmaps-' + mapId ), config);

      for (var i = 0; i < locations.length; i++) {

        var infowindow = new google.maps.InfoWindow();

        if ( locations[i]['gmaps_marker_icon_type'] == 'custom' ) {
          icon = {
            url: locations[i]['gmaps_marker_icon']['url'],
            scaledSize: new google.maps.Size(locations[i]['gmaps_marker_size']['size'], locations[i]['gmaps_marker_size']['size']),
          };
        } else {
          icon = "";
        }

        let latitude = locations[i]['gmaps_search_type'] == "search" ? Number( locations[i]['gmaps_location_search']['gmaps_latitude'] ) : Number( locations[i]['gmaps_latitude']);
        let longitude = locations[i]['gmaps_search_type'] == "search" ? Number( locations[i]['gmaps_location_search']['gmaps_longitude'] ) : Number( locations[i]['gmaps_longitude']);

        // Defaults
        if( isNaN(latitude) ) {
          latitude = 28.6469655;
          longitude = 77.0932634;
        }

        var marker = new google.maps.Marker({
          position: new google.maps.LatLng( latitude, longitude ),
          map: map,
          icon: icon
        });

        bounds.extend(marker.position);

        if ( markerAnimation == "drop" ) {
          marker.setAnimation( google.maps.Animation.DROP );
        } else if ( markerAnimation == "bounce" ) {
          marker.setAnimation( google.maps.Animation.BOUNCE );
        }
        
        if ( locations[i]['gmaps_info_window_options'] == "mouse-click" ) {
          google.maps.event.addListener(marker, 'click', (function(marker, i) {

            return function() {
              if ( locations[i]['gmaps_location'] !== '' ) {
                infowindow.setContent("<div class='info-window-content'><h3 class='info-title'>" + locations[i]['gmaps_info_title'] + "</h3><p class='info-description'>" + locations[i]['gmaps_info_description'] + "</p></div>");
                infowindow.open(map, marker);
              }
            }
          })(marker, i));
        } else if ( locations[i]['gmaps_info_window_options'] == "page-load" ) {
          if ( locations[i]['gmaps_location'] !== '' ) {
            infowindow.setContent("<div class='info-window-content'><h3 class='info-title'>" + locations[i]['gmaps_info_title'] + "</h3><p>" + locations[i]['gmaps_info_description'] + "</p></div>");
            infowindow.open(map, marker);
          }
        }

      }

      map.fitBounds(bounds);

      // restore the zoom level after the map is done scaling
      var listener = google.maps.event.addListener(map, "idle", function () {
        // No zoom for map bounds
        if ( zoom !== "" ) {
          map.setZoom(zoom);
        }
        google.maps.event.removeListener(listener);
      });
    },

    Mighty_TwoStepLogin: function( $scope, $ ) {
      var sel = $scope.find( '.mighty-tsl' );
      var enableTsl = sel.data( 'enable-tsl' ) == "yes" ? true : false;
      var showPwd = sel.find( '.section-password .mt-password-trigger .icon-eye');
      var hidePwd = sel.find( '.section-password .mt-password-trigger .icon-eye-slash');
      var pwdField = sel.find( '.section-password .mt-form-password .mt-control input');

      $( showPwd ).click( function () {
        $( showPwd ).css( 'display', 'none' );
        $( hidePwd ).css( 'display', 'block' );
        $( pwdField ).attr( 'type', 'text' );
      });

      $( hidePwd ).click( function () {
        $( hidePwd ).css( 'display', 'none' );
        $( showPwd ).css( 'display', 'block' );
        $( pwdField ).attr( 'type', 'password' );
      });

      if ( enableTsl ) {
        var nextBtn = sel.find( '.section-email .mt-next-button-wrapper .mt-next-button' );
        $( nextBtn ).click( function( e ) {
          e.preventDefault();
          $( sel.find( '.section-email' ) ).css( 'display', 'none' );
          $( sel.find( '.section-password' ) ).css( 'display', 'block' );
        });
      }
    },

    Mighty_PayPalButton: function( $scope, $ ) {
      var sel = $scope.find( '.mighty-paypalbtn' );
      var paypalEmail = sel.data( 'paypal-email' );

      $( sel.find( '.mighty-button .mighty-button-link' ) ).click( function() {
        if ( paypalEmail.indexOf('@') > 0 ) {
          $( errorField ).css( 'display', 'none' );
          $( sel ).submit();
        } else {
          var errorField = sel.find( '.mighty-paypal-errors' );
          $( errorField ).css( 'display', 'block' );
          $( errorField ).html( 'Email is not valid! Please use Business Emails only.' )
        }
      })
    },

    Mighty_Weather: function( $scope, $ ) {
      
      var sel = $scope.find( '.mt-weather' );
      var dailyForecast = sel.find( '.mt-weather-daily-forecast' );
      var hourlyForecast = sel.find( '.mt-weather-hourly-forecast' );

      if ( dailyForecast.length ) {
        new SimpleBar($( dailyForecast )[0], {
          autohide: false,
          forceVisible: true,
        });
      }

      if ( hourlyForecast.length ) {
        new SimpleBar($( hourlyForecast )[0], {
          autohide: false,
        });
      }
    },

    Mighty_Hotspot: function( $scope, $ ) {

      var sel = $scope.find('.mt-hotspot');
      var enableTooltips = sel.data( 'enable-tooltips' );
      var enableTour = sel.data( 'enable-tour' );
      var tooltipAnimation = sel.data( 'tooltip-animation' );

      if ( enableTour == "yes" ) {
        var markers = sel.data( 'markers' );
        var tooltipPosition = sel.data( 'tooltip-position' );
        var showArrow = sel.data( 'show-arrow' ) == 'show' ? "<div class='arrow'></div>" : '';
        var steps = [];

        markers.forEach(marker => {
          steps.push({
            element: '#marker-' + marker['_id'],
            content: marker['tooltip_content'],
            placement: tooltipPosition,
            animation: true,
            container: '.elementor-repeater-item-' + marker['id']
          })
        });

        var tour = new Tour({
          steps: steps,
          storage: false,
          autoscroll: false,
          keyboard: true,
          template: "<div class='mt-tooltips " + tooltipAnimation + " popover'>" + showArrow + "<div class='popover-body'></div><div class='popover-navigation'><div class='btn-group'><button class='btn btn-sm btn-secondary' data-role='prev'>« Prev</button><button class='btn btn-sm btn-secondary' data-role='next'>Next »</button></div></div></div>",
        });
  
        // Initialize & start the tour
        tour.init();
        tour.start();
      }
      
      if ( enableTooltips == "yes" || enableTour == "yes" ) {
        $('[data-toggle="popover"]').each(function () {
          $($(this).popover('show').popover('hide').data('bs.popover').tip).addClass('mt-tooltips '+tooltipAnimation);
        });
      }
    },

    Mighty_Opentable: function( $scope, $ ) {

      var sel = $scope.find('.mt-open-table');
      // var script = sel.data( 'script' );
      var btnAnimation = sel.data( 'btn-animation' );

      // Button Animation
      sel.on('hover', "#ot-reservation-widget .ot-button", function() {
        $( this ).addClass( btnAnimation );
      });

      // TODO: Script append workaround
      // let otscript = document.createElement('script');
      // otscript.src = script;
      // otscript.type = "text/javascript";
      // otscript.async = false;
      // setTimeout(function () {
      //   sel.append(otscript);
      //   console.log('append done');
      // }, 2000);
    },

    Mighty_Contenttoggle: function( $scope, $ ) {

      var sel = $scope.find('.mt-content-toggle-buttons');
      var toggle = sel.find( '.switch .switch__input' );
      var section1 = sel.find( '.mt-toggle-content .mt-content-1' );
      var section2 = sel.find( '.mt-toggle-content .mt-content-2' );
      var defaultToggle = sel.data( 'default-toggle' );
      
      toggle.on( 'click', function() {
        if ( toggle.prop('checked') ) {
          chkToggle( 'toggle-two' );
        } else {
          chkToggle( 'toggle-one' );
        }
      });

      function chkToggle( defaultToggle ) {
        if ( defaultToggle == 'toggle-two' ) {
          section2.css( 'display', 'block' );
          section1.css( 'display', 'none' );
        } else {
          section2.css( 'display', 'none' );
          section1.css( 'display', 'block' );
        }
      }

      chkToggle( defaultToggle );
    },

    Mighty_Pricelist: function( $scope, $ ) {
      var sel = $scope.find('.mt-pricelist');
      var filterEnable = sel.data( 'filter' );
      
      if ( filterEnable == "enable" ) {
        var link = sel.find( 'a.mt-tabs-link' );

        // First Tab Active
        $( sel.find( '.tab-link' )[0] ).addClass( 'active' );

        // Show items of Active Tab
        var activeTab = sel.find( '.tab-link.active .mt-tabs-link' ).data( 'id' );
        $( sel.find( '.tab-item' ) ).css( 'display', 'none' );
        $( sel.find( '.tab-'+activeTab ) ).css( 'display', 'block' );

        // Tabs Click Event
        link.on( 'click', function() {
          var id = $( this ).data( 'id' );

          $( sel.find( '.tab-link' ) ).removeClass( 'active' );
          $( sel.find( '.tab-link-'+id ) ).addClass( 'active' );

          $( sel.find( '.tab-item' ) ).css( 'display', 'none' );
          $( sel.find( '.tab-'+id ) ).css( 'display', 'block' );
        })
      }
    },

    Mighty_Whatsappchat: function( $scope, $ ) {
      
      var sel = $scope.find( '.mt-whatsapp-chat' );
      var timeOnSite = sel.data( 'time-on-site' ) * 1000;
      var scrollPosition = sel.data( 'scroll-position' );
      var exitIntent = sel.data( 'exit-intent' );

      var btnClosePopup = sel.find( '.close' );
      var btnOpenPopup = sel.find( '.mt-whatsapp-popup' );
      var popup = sel.find( '.mt-whatsapp-chat-box' );

      btnClosePopup.on( 'click', function() {
        popup.removeClass( 'mt-whatsapp-chat-box-open' );
      });

      btnOpenPopup.on( 'click', function() {
        popup.toggleClass( 'mt-whatsapp-chat-box-open' );
      });
      
      // Automatically open after specified time.
      if ( timeOnSite ) {
        if( ! popup.hasClass( 'mt-whatsapp-chat-box-open' ) ) {
          setTimeout(() => {
            popup.addClass( 'mt-whatsapp-chat-box-open' );
          }, timeOnSite );
        }
      }

      // Automatically open after specified scroll.
      if ( scrollPosition ) {
        $( document ).scroll(function () {
          if ( $( this ).scrollTop() > scrollPosition ) {
            popup.addClass( 'mt-whatsapp-chat-box-open' );
          }
        });
      }

      if( exitIntent == 'yes' ) {
        addEvent(document, 'mouseout', function (evt) {
          if (evt.toElement == null && evt.relatedTarget == null) {
            if (!popup.hasClass('mt-whatsapp-chat-box-open')) {
              popup.addClass('mt-whatsapp-chat-box-open');
            }
          }
        });

        function addEvent(obj, evt, fn) {
          if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
          } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
          }
        }
      }

    },

    Mighty_Clicktocall: function( $scope, $ ) {

      var sel = $scope.find( '.mt-click-to-call' );

      var timeOnSite = sel.data( 'time-on-site' ) * 1000;
      var scrollPosition = sel.data( 'scroll-position' );
      var exitIntent = sel.data( 'exit-intent' );
  
      var btnOpenPopup = sel.find( '.mt-ctc-button' );
      var popup = sel.find( '.mt-ctc-chat-box' );

      btnOpenPopup.on( 'click', function() {
        popup.toggleClass( 'mt-click-to-call-box-open' )
      });
      
      // Automatically open after specified time.
      if ( timeOnSite ) {
        if( ! popup.hasClass( 'mt-click-to-call-box-open' ) ) {
          setTimeout(() => {
            popup.addClass( 'mt-click-to-call-box-open' );
          }, timeOnSite );
        }
      }

      // Automatically open after specified scroll.
      if ( scrollPosition ) {
        $( document ).scroll(function () {
          if ( $( this ).scrollTop() > scrollPosition ) {
            popup.addClass( 'mt-click-to-call-box-open' );
          }
        });
      }

      if( exitIntent == 'yes' ) {
        addEvent(document, 'mouseout', function (evt) {
          if (evt.toElement == null && evt.relatedTarget == null) {
            if (!popup.hasClass( 'mt-click-to-call-box-open' )) {
              popup.addClass( 'mt-click-to-call-box-open' );
            }
          }
        });

        function addEvent(obj, evt, fn) {
          if (obj.addEventListener) {
            obj.addEventListener(evt, fn, false);
          } else if (obj.attachEvent) {
            obj.attachEvent("on" + evt, fn);
          }
        }
      }
      

    },

    Mighty_Instagallery: function( $scope, $ ) {
      
      var sel = $scope.find( '.mt-insta-gallery' );

      var enableLoadMore = sel.data( 'load-more' );
      var enableCaption = sel.data( 'show-caption' );
      var imageClickAction = sel.data( 'image-click-action' );
      var template = sel.data( 'template' );

      // Share Click Event
      sel.find( ".mt-insta-gallery-post-share" ).click( function() {  
        $( this ).toggleClass( "showlist" );
      });

      if( enableLoadMore == 'enable' ) {
        var loadMoreBtn = sel.find('.insta-load-more');
        var imagesCount = 1;
        var postsPerPage = sel.data('images-count');

        loadMoreBtn.on( 'click', function() {

          var igImages = sel.data( 'ig-images' );

          // Show Loading Text
          sel.find( '.load-more .loading-text' ).css( 'display', 'block' );

          if ( postsPerPage && (igImages.length != imagesCount) ) {

            renderIgImages( igImages[ imagesCount++ ] );

            if ( sel.find( '.load-more .insta-load-more' ).data( 'paging') == null && imagesCount == igImages.length ) {
              sel.find( '.load-more ' ).css( 'display', 'none' );
            }

          } else {

            var pagingUrl = $(this).data( 'paging' );

            $.ajax({
              url: MightyAddonsPro.ajaxUrl,
              type: 'post',
              data: {
                action: MightyAddonsPro.instaPagingAction,
                url: pagingUrl,
                postsPerPage: postsPerPage
              },
              success: function( data ) {
                var response = JSON.parse( data );
  
                if( response.status == 'error' ) {
                  console.log('Failed to fetch more images. Try again later.');
                } else {
                  var images = response.data;

                  // updating new posts
                  sel.data( 'ig-images', images );

                  if ( postsPerPage == '' ) {
                    renderIgImages( images );
                    if ( response.paging == null ) {
                      sel.find( '.load-more ' ).css( 'display', 'none' );
                    }
                  } else {
                    imagesCount = 1;
                    renderIgImages( images[0] );
                  }

                  sel.find( '.load-more .insta-load-more' ).data( 'paging', response.paging );
                  
                }
  
                console.log('successfully fetched!');
              },
              error: function() {
                console.log('#212 Something went wrong!');
              }
            });
          }
        });
      }

      // Opens Image in Popup
      if( imageClickAction == 'open_popup' ) {
        
        var clickHandler;
        if( template == 'classic' ) {
          clickHandler = '.mt-insta-gallery-media-classic img';
        } else {
          if( enableCaption == 'yes' ) {
            clickHandler = '.mt-insta-gallery-overlay';
          } else {
            clickHandler = '.mt-insta-media';
          }
        }
        
        sel.on( 'click', clickHandler, function() {

          $('body').addClass('modal-open');

          if( enableCaption == 'yes' ) {
            var mediaType = $(this).data('type');
            var mediaUrl = $(this).data('url');
            var mediaCaption = $(this).data('caption');
            var mediaPermalink = $(this).data('permalink');
            var mediaTimestamp = $(this).data('timestamp');
          } else {
            var mediaType = $(this).parent().data('type');
            var mediaUrl = $(this).parent().data('url');
            var mediaCaption = $(this).parent().data('caption');
            var mediaPermalink = $(this).parent().data('permalink');
            var mediaTimestamp = $(this).parent().data('timestamp');
          }
          
          // Get the modal
          var modal = sel.find("#insta-modal");
          var closeModal = sel.find(".ig-modal span.close");

          if( mediaType == 'VIDEO' ) {
            modal.find('.mt-insta-gallery-media').html('<video controls src="' + mediaUrl + '"></video');
          } else {
            modal.find('.mt-insta-gallery-media').html('<img src="' + mediaUrl + '" />');
          }
          modal.find('.mt-insta-gallery-profile-link a').attr( 'href', mediaPermalink );
          modal.find('.mt-insta-gallery-post-content .mt-insta-gallery-feed-posts-item-text').text( mediaCaption );
          modal.find('.mt-insta-gallery-post-date').text( mediaTimestamp );

          // Share links
          modal.find( '.mt-insta-gallery-post-meta .mt-insta-share-list .share-facebook' ).attr( 'href', "https://www.facebook.com/sharer/sharer.php?u="+mediaPermalink );
          modal.find( '.mt-insta-gallery-post-meta .mt-insta-share-list .share-twitter' ).attr( 'href', "https://twitter.com/share?url="+mediaPermalink+"&text=Check%20this%20out..." );

          modal.css( 'display', 'block' );

          closeModal.on( 'click', function() {
            modal.css( 'display', 'none' );
            $('body').removeClass('modal-open');
          });

          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if ( event.target == modal[0] ) {
              modal.css( 'display', 'none' );
              $('body').removeClass('modal-open');
            }
          }
        });
      }

      function renderIgImages( images ) {
        images.forEach(media => {

          var mediaType;

          if( media.media_type == 'IMAGE' || media.media_type == 'CAROUSEL_ALBUM' ) {
            mediaType = '<img class="mt-insta-media" src="'+ media.media_url +'" alt="'+ media.caption +'">';
          } else {
            mediaType = '<video controls class="mt-insta-media" src="'+ media.media_url +'" alt="'+ media.caption +'"></video>';
          }

          var mediaElement = '';

          if( template == 'classic' ) {
            
            var classicElements = sel.data( 'classic-elements' );

            mediaElement += '<div class="mt-insta-gallery-post">';

            if( $.inArray( 'user', classicElements ) !== -1 || $.inArray( 'instagram_icon', classicElements ) !== -1 || $.inArray( 'date', classicElements ) !== -1 ) {
                mediaElement += '<div class="mt-insta-gallery-header"><div class="mt-insta-gallery-user"><div class="mt-insta-gallery-user-name-wrapper">';

                if( $.inArray( 'user', classicElements ) !== -1 ) {
                    mediaElement += '<div class="mt-insta-gallery-user-name"><a href="https://www.instagram.com/'+ media.username +'" title="'+ media.username +'" target="_blank" rel="nofollow">'+ media.username +'</a></div>';
                }

                if( $.inArray( 'date', classicElements ) !== -1 ) {
                    mediaElement += '<p class="mt-insta-gallery-post-date">'+ media.timestamp +'</p>';
                }

                mediaElement += '</div></div>';

                if( $.inArray( 'instagram_icon', classicElements ) !== -1 ) {
                    mediaElement += '<div class="mt-insta-gallery-profile-link"><a href="'+ media.media_url +'" target="_blank" rel="nofollow" title="View on Instagram"><svg viewBox="0 0 24 24" width="24" height="24"><path d="M17.1,1H6.9C3.7,1,1,3.7,1,6.9v10.1C1,20.3,3.7,23,6.9,23h10.1c3.3,0,5.9-2.7,5.9-5.9V6.9C23,3.7,20.3,1,17.1,1zM21.5,17.1c0,2.4-2,4.4-4.4,4.4H6.9c-2.4,0-4.4-2-4.4-4.4V6.9c0-2.4,2-4.4,4.4-4.4h10.3c2.4,0,4.4,2,4.4,4.4V17.1z"></path><path d="M16.9,11.2c-0.2-1.1-0.6-2-1.4-2.8c-0.8-0.8-1.7-1.2-2.8-1.4c-0.5-0.1-1-0.1-1.4,0C10,7.3,8.9,8,8.1,9S7,11.4,7.2,12.7C7.4,14,8,15.1,9.1,15.9c0.9,0.6,1.9,1,2.9,1c0.2,0,0.5,0,0.7-0.1c1.3-0.2,2.5-0.9,3.2-1.9C16.8,13.8,17.1,12.5,16.9,11.2zM12.6,15.4c-0.9,0.1-1.8-0.1-2.6-0.6c-0.7-0.6-1.2-1.4-1.4-2.3c-0.1-0.9,0.1-1.8,0.6-2.6c0.6-0.7,1.4-1.2,2.3-1.4c0.2,0,0.3,0,0.5,0s0.3,0,0.5,0c1.5,0.2,2.7,1.4,2.9,2.9C15.8,13.3,14.5,15.1,12.6,15.4z"></path><path d="M18.4,5.6c-0.2-0.2-0.4-0.3-0.6-0.3s-0.5,0.1-0.6,0.3c-0.2,0.2-0.3,0.4-0.3,0.6s0.1,0.5,0.3,0.6c0.2,0.2,0.4,0.3,0.6,0.3s0.5-0.1,0.6-0.3c0.2-0.2,0.3-0.4,0.3-0.6C18.7,5.9,18.6,5.7,18.4,5.6z"></path></svg></a></div>';
                }

                mediaElement += '</div>';
            }

            mediaElement += '<div class="mt-insta-gallery-media mt-insta-gallery-media-classic" data-permalink="'+ media.media_url +'" data-type="'+ media.media_type +'" data-url="'+ media.media_url +'" data-caption="'+ media.caption +'" data-timestamp="'+ media.timestamp +'">' + mediaType + '</div>';

            if( $.inArray( 'share', classicElements ) !== -1 ) {
              mediaElement += '<div class="mt-insta-gallery-post-meta"><div class="mt-insta-gallery-post-share"><svg class="mt-insta-gallery-post-share-icon" viewBox="0 0 24 24" width="24" height="24"><path d="M22.8,10.5l-9.8-7.9c-0.2-0.2-0.5-0.2-0.7-0.1c-0.2,0.1-0.4,0.4-0.4,0.6v3.7C6.5,7,4.5,8.9,2.6,12.4C1,15.4,1,18.9,1,21.3c0,0.2,0,0.4,0,0.5c0,0.3,0.2,0.6,0.5,0.7c0.1,0,0.1,0,0.2,0c0.2,0,0.5-0.1,0.6-0.3c3.7-6.5,5.5-6.8,9.5-6.8V19c0,0.3,0.2,0.5,0.4,0.6s0.5,0.1,0.7-0.1l9.8-8c0.2-0.1,0.2-0.3,0.2-0.5S22.9,10.7,22.8,10.5z M13.2,17.6v-2.9c0-0.2-0.1-0.4-0.2-0.5c-0.1-0.1-0.3-0.2-0.5-0.2c-2.7,0-3.8,0-5.9,0.9c-1.8,0.8-2.8,2.3-4.2,4.5c0.1-2,0.3-4.4,1.4-6.4c1.7-3.2,3.5-4.8,8.7-4.8c0.4,0,0.7-0.3,0.7-0.7V4.6l8.1,6.5L13.2,17.6z"></path></svg><span class="mt-insta-gallery-post-share-label">Share</span><div class="mt-insta-share-list"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='+ media.permalink +'"><i class="fab fa-facebook-f"></i> Share on Facebook</a><a target="_blank" href="https://twitter.com/share?url='+ media.permalink +'&amp;text=Check%20this%20out.."><i class="fab fa-twitter"></i>ShareTwitter</a></div></div></div>';
            }

            if( $.inArray( 'caption', classicElements ) !== -1 && media.caption ) {
              mediaElement += '<div class="mt-insta-gallery-post-content"><a class="mt-insta-gallery-feed-posts-item-link" href="'+ media.permalink +'" target="_blank" rel="nofollow"><div class="mt-insta-gallery-feed-posts-item-text">'+ media.caption +'</div></a></div>';
            }

            mediaElement += '</div>';

          } else {

            mediaElement += '<div class="mt-insta-gallery-post">';

            if( imageClickAction == 'open_instagram' ) {
              mediaElement += '<a target="_blank" href="' + media.permalink + '">';
            }

            mediaElement += '<div class="mt-insta-gallery-media" data-permalink="'+ media.permalink +'" data-type="'+ media.media_type +'" data-url="'+ media.media_url +'" data-caption="'+ media.caption +'" data-timestamp="'+ media.timestamp +'">';

            mediaElement += mediaType;

            if( enableCaption == 'yes' && media.caption ) {
              mediaElement += '<div class="mt-insta-gallery-overlay" data-permalink="'+ media.permalink +'" data-type="'+ media.media_type +'" data-url="'+ media.media_url +'" data-caption="'+ media.caption +'" data-timestamp="'+ media.timestamp +'"><div class="mt-insta-gallery-post-content"><div class="mt-insta-gallery-feed-posts-item-text">'+ media.caption +'</div></div></div>';
            }

            mediaElement += '</div>';

            if( imageClickAction == 'open_instagram' ) {
              mediaElement += '</a>';
            }

            mediaElement += '</div>';

          }

          sel.find( '.mt-insta-gallery-grid' ).append( mediaElement );
        });
        // Hiding Loading text after rendering images
        sel.find( '.load-more .loading-text' ).css( 'display', 'none' );
      }

    },

    Mighty_Timeline: function ( $scope, $ ) {

      var $wrapper = $scope.find( '.mt-timeline-wrap' );

      var $markers = $scope.find( '.mt-timeline-marker' );
      var lastBlock = $scope.find( '.mt-timeline-block:last-child' );
      var outerLine = $scope.find( '.mt-timeline-line' );
      var innerLine = $scope.find( '.mt-timeline-line-inner' );
      var pagination = $scope.find( '.mt-timeline-wrap' ).data( 'pagination' );
      var orientation = $scope.find( '.mt-timeline-wrap' ).data( 'orientation' );

      var firstIcon = $markers.first().position();
      var lastIcon = $markers.last().position();

      outerLine.css( 'top', firstIcon.top );
      var blockHeight = lastBlock.height();
      var lastBlockOffsetTop = lastBlock.offset().top - $wrapper.offset().top;
      var lastBlock = lastBlock.offset().top - $wrapper.offset().top;

      var elementEnd = lastBlock + 20;

      // Setting Outer height dynamically
      outerLine.height(elementEnd);
      // Starting from the Start
      innerLine.height(0);

      // Callback function for all event listeners.
      function scrollingEvents() {
        
        if ( $scope.find(".mt-timeline-blocks").length < 1 ) {
          return false;
        }

        lastBlock = $scope.find( '.mt-timeline-block' ).last();
        outerLine.css( 'top', firstIcon.top );
        blockHeight = lastBlock.height();
        lastBlockOffsetTop = lastBlock.offset().top - $wrapper.offset().top;
        var topBlockHeight = blockHeight - lastIcon.top;
        outerLine.css( 'bottom', topBlockHeight );
        elementEnd = lastBlockOffsetTop + 20;

        if ( lastBlock.find( '.mt-timeline-image' ).length > 0 ) {
          elementEnd = lastBlockOffsetTop + 200;
        }
        outerLine.height(elementEnd);
        
        var viewportHeightHalf = document.documentElement.clientHeight / 2;
        var elementPos = $wrapper.offset().top;

        var offsetDiff = ( elementPos + firstIcon.top ) - $( document ).scrollTop();

        if ( offsetDiff < 0 ) {
          offsetDiff = Math.abs( offsetDiff );
        } else {
          offsetDiff = -Math.abs( offsetDiff );
        }
        
        var num = 0;
        if ( elementPos < viewportHeightHalf ) {

          if ( ( viewportHeightHalf + Math.abs( offsetDiff ) ) < elementEnd ) {
            innerLine.height( viewportHeightHalf + offsetDiff );
          } else {
            if ( ( offsetDiff + viewportHeightHalf ) >= elementEnd ) {
              innerLine.height( elementEnd );
            }
          }
        } else {
          if ((offsetDiff + viewportHeightHalf) < elementEnd) {
            if (0 > offsetDiff) {
              innerLine.height((viewportHeightHalf) - Math.abs( offsetDiff ));
              ++num;
            } else {
              innerLine.height((viewportHeightHalf) + offsetDiff);
            }
          } else {
            if ((offsetDiff + viewportHeightHalf) >= elementEnd) {
              innerLine.height(elementEnd);
            }
          }
        }

        var markerPosition, blockPosition, elementCardPos;
        var topIcon, topBlock;
        $markers = $scope.find( '.mt-timeline-marker' );

        for ( var i = 0; i < $markers.length; i++ ) {

          markerPosition = $( $markers[i] ).offset().top;

          elementPos = $wrapper.offset().top;
          elementCardPos = $wrapper.offset().top;

          topIcon = markerPosition - $(document).scrollTop();
          topBlock = blockPosition - $(document).scrollTop();

          if ( topIcon < viewportHeightHalf ) {
            // Active
            $( $markers[i] ).parent().removeClass( 'mt-timeline-unfocused' );
            $( $markers[i] ).parent().addClass( 'mt-timeline-focused' );
          } else {
            // Inactive
            $( $markers[i] ).parent().addClass( 'mt-timeline-unfocused' );
            $( $markers[i] ).parent().removeClass( 'mt-timeline-focused' );
          }
        }

      }
      // Listen for events.
      window.addEventListener( "load", scrollingEvents );
      window.addEventListener( "resize", scrollingEvents );
      window.addEventListener( "scroll", scrollingEvents );

      if( pagination == 'infinite_load' ) {
        $( function () {
          $scope.find(".mt-timeline-blocks").jscroll( {
            autoTrigger: true,
            loadingHtml: '<div class="text-center"><span class="mt-timeline-loader">Loading...</span></div>',
            nextSelector: 'nav.mt-timeline-pagination span.current + a.page-numbers',
            contentSelector: 'div.mt-timeline-block',
            pagingSelector: 'nav.mt-timeline-pagination',
            callback: function () {
              // Increasing Line Height Dynamically
              $scope.find( '.mt-timeline-line').height( ( $scope.find( '.mt-timeline-line').height() + $(this).height() ) );
               
              // Hotfix for new blocks appended
              $(this).prev().parent().append( $(this).children( '.mt-timeline-block' ) );
              $(this).remove();
            }
          } );
        } );
      } else if ( pagination == 'load_more' ) {

        var posts = $scope.find( '.mt-timeline-blocks' ).data( 'posts' );

        var loadMoreBtn = $scope.find( '.timeline-load-more' );
        var postCount = 1;
        var showImage = $scope.find( '.mt-timeline-wrap' ).data( 'show-image' );
        
        if ( posts.length <= 1 ) {
          loadMoreBtn.css( 'display', 'none' );
        }

        loadMoreBtn.on( 'click', function() {
          
          // Show Loading Text
          $scope.find( '.load-more .loading-text' ).css( 'display', 'block' );

          posts[ postCount++ ].forEach( post => {

            var blockElement = '<div class="mt-timeline-block mt-timeline-block-odd elementor-repeater-item-' + post.id + '"><div class="mt-timeline-content">';
            if( post.content_image && showImage == 'yes' ) {
              blockElement += '<div class="mt-timeline-image"><img src="'+ post.content_image +'" alt="'+ post.content_title +'"></div>';
            }

            if( orientation !== 'center' ) {
              blockElement += '<div class="mt-timeline-date">'+ post.content_date +'</div>';
            }

            if( post.content_title ) {
              blockElement += '<h3 class="mt-timeline-title">'+ post.content_title +'</h3>';
            }

            if( post.content_description ) {
              blockElement += '<div class="mt-timeline-content-text">'+ post.content_description +'</div>';
            }

            blockElement += '<div class="mt-timeline-arrow"></div></div><div class="mt-timeline-marker"><div class="mt-timeline-marker-inner"><i aria-hidden="true" class="far fa-calendar-alt"></i></div></div>';

            if( orientation == 'center' ) {
              blockElement += '<div class="mt-timeline-date">'+ post.content_date +'</div></div>';
            }

            $scope.find( '.mt-timeline-blocks' ).append( blockElement );

            // Hide Loading Text
            $scope.find( '.load-more .loading-text' ).css( 'display', 'none' );

            // Increasing Height Dynaically
            var lastBlock = $scope.find( '.mt-timeline-block:last-child' );
            var lastBlock = lastBlock.offset().top - $wrapper.offset().top;
            var elementEnd = lastBlock + 20;
            outerLine.height(elementEnd);

            // Hide Load more Button on posts empty
            if( postCount >= posts.length ) {
              $scope.find( '.load-more' ).css( 'display', 'none' );
            }
          });
        });
      }

    }

  }

  $(window).on('elementor/frontend/init', function () {
    
    elementorFrontend.hooks.addAction( 'frontend/element_ready/global', Mighty_Addons_Pro.Mighty_Particles );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/global', Mighty_Addons_Pro.Mighty_SectionSlider );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-openstreet.default', Mighty_Addons_Pro.Mighty_Openstreet );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-gmaps.default', Mighty_Addons_Pro.Mighty_Googlemaps );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-tsl.default', Mighty_Addons_Pro.Mighty_TwoStepLogin );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-paypalbutton.default', Mighty_Addons_Pro.Mighty_PayPalButton );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-weather.default', Mighty_Addons_Pro.Mighty_Weather );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-hotspot.default', Mighty_Addons_Pro.Mighty_Hotspot );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-opentable.default', Mighty_Addons_Pro.Mighty_Opentable );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-contenttoggle.default', Mighty_Addons_Pro.Mighty_Contenttoggle );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-pricelist.default', Mighty_Addons_Pro.Mighty_Pricelist );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-whatsappchat.default', Mighty_Addons_Pro.Mighty_Whatsappchat );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-clicktocall.default', Mighty_Addons_Pro.Mighty_Clicktocall );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-instagallery.default', Mighty_Addons_Pro.Mighty_Instagallery );
    elementorFrontend.hooks.addAction( 'frontend/element_ready/mt-timeline.default', Mighty_Addons_Pro.Mighty_Timeline );

  });

})(jQuery);

/*This file was exported by "Export WP Page to Static HTML" plugin which created by ReCorp (https://myrecorp.com) */