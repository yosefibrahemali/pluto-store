@include('layouts.app')
<div>
  
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Checkout
                </div>
            </div>
            
        </div>
        
       @livewire('placeorder')
        <script>
        function myFunction() { 
            document.getElementById("form2").submit(); 
        } 
        function getOption() {
            selectElement = 
                  document.querySelector('#select1');
            output = selectElement.value;
            document.querySelector('.output').textContent = output;
            window.alert($shipp)
        }
       // Initialize and add the map

function showMap(lat, lng) {
          const myLatLng = { lat: lat, lng: lng };
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: myLatLng,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello Rajkot!",
          });
        }  



        let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: -34.397, lng: 150.644 },
    zoom: 8,
  });
}

initMap();
$('form select').on('change', function(){
    $(this).closest('form').submit();
});

$(document).ready(function(){
       $( ".chosenHeartIcon" ).click(function() {
        if($(this).hasClass('iconHeartActive')) {
            $( this ).removeClass( "iconHeartActive" );
            $( this ).addClass( "iconHeartInactive" );
        } else {
            $( this ).removeClass( "iconHeartInactive" );
            $( this ).addClass( "iconHeartActive" );
        }

     });
 });
        </script>
    </main>
</div>
