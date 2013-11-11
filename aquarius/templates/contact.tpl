{extends main.tpl}
{block name='content'}
    <div class="row">
        <div class="col-md-4">
            <h1>{$title2|default:$title}{edit}</h1>
            <p><strong>{$company}</strong><br />
            {$street}<br />
            {$city}</p>
            <p>{$phone}<br />
            {$fax}</p>
            <p>{$email}</p>
        </div>
        <div class="col-md-8">
            <div id="map_canvas"></div>
        </div>
    </div>
{/block}

{block name=js}
    {literal}
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
            var m = $("#map_canvas")[0];
            var myLatlng = new google.maps.LatLng{/literal}({$latLng_x},{$latLng_y}){literal};
            var myOptions = {
                zoom: 11,
                center: new google.maps.LatLng{/literal}({$latLng_x+0.020},{$latLng_y}){literal},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(m, myOptions);
            var contentString = {/literal}'<div id="info">'+
                '<div id="bodyContent">'+
                '<p><strong>{$company}</strong><br />' +
                '{$street}<br />'+
                '{$city}</p>'+
                '<p><a href="{$googlemaps_url}" target="_blank" style="font-size: 14px;" >{wording Grössere Kartenansicht anzeigen}</a>' +
                '</div>'+
                '</div>'{literal};
            
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: "{/literal}{$company}, {$street}, {$city}{literal}"
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });
            infowindow.open(map,marker);
        });
    </script>
    {/literal}
{/block}