// const longitude = document.querySelector('#longitude').value;
// const latitude = document.querySelector('#latitude').value;
const longitude = "106.9900736";
const latitude = "-6.2884687";
console.log("longitude", longitude);
// let dtArr = []
// const showPosition = (position) => {
//     dtArr.push(position.coords.latitude, position.coords.longitude)
// }
// console.log(dtArr);


// navigator.geolocation.getCurrentPosition(showPosition);


// icon
let greenIcon = L.icon({
    iconUrl: '../storage/images/marker-icon.png',
    shadowUrl: '../storage/images/marker-shadow.png',

    iconSize: [40, 40], // size of the icon
    shadowSize: [50, 64], // size of the shadow
    iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62], // the same for the shadow
    popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
});

// Create the map
let map = L.map('map', {
    zoomControl: true,
    center: [-6.2162989, 106.8442153],
    zoom: 4,
    zoomSnap: 0.1,
    zoomDelta: 1,
    doubleClickZoom: true
});

// Set up the OSM layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'CuyInvitation'
}).addTo(map);

map.fitBounds([
    [-6.2162989, 106.8442153],
]);

let marker = L.marker([-6.2162989, 106.8442153], {
    icon: greenIcon
}).addTo(map);
marker.bindPopup(`<a href="https://www.google.com/maps/place/PT+Teknoglobal+Multi+Sistem+Integrasi/@-6.2162989,106.8420266,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f3c3b5131d0f:0x244598c3d21f459a!8m2!3d-6.2162989!4d106.8442153" target="_blank">Location in here.</a>`).openPopup();


// let geojsonFeature = {
//     "type": "Feature",
//     "properties": {
//         "name": "Coors Field",
//         "amenity": "Baseball Stadium",
//         "popupContent": "This is where the Rockies play!"
//     },
//     "geometry": {
//         "type": "Point",
//         "coordinates": [-6.2162989, 106.8442153]
//     }
// };

// let myStyle = {
//     "color": "#ff7800",
//     "weight": 5,
//     "opacity": 0.65
// };

// L.geoJSON(geojsonFeature, {
//     style: myStyle
// }).addTo(map);

// click map
function onMapClick(e) {
    alert("You clicked the map at " + e.latlng);
}

// map.on('click', onMapClick);



// water mark
L.Control.Watermark = L.Control.extend({
    onAdd: function (map) {
        var img = L.DomUtil.create('img');

        img.src = '../storage/images/map.png';
        img.style.width = '40px';

        return img;
    },

    onRemove: function (map) {
        // Nothing to do here
    }
});

L.control.watermark = function (opts) {
    return new L.Control.Watermark(opts);
}

L.control.watermark({
    position: 'bottomleft'
}).addTo(map);

L.control.custom({
        position: 'bottomright',
        content: '<button type="button" id="navigasi" class="btn btn-default">' +
            '    <i class="fa fa-crosshairs"></i>' +
            '</button>',
        classes: 'btn-group-vertical btn-group-sm',
        style: {
            margin: '10px',
            padding: '0px 0 0 0',
            cursor: 'pointer',
        },
        datas: {
            'foo': 'bar',
        },
        events: {
            click: function (data) {
                // console.log('wrapper div element clicked');
                // console.log(data);
            },
            dblclick: function (data) {
                // console.log('wrapper div element dblclicked');
                // console.log(data);
            },
            contextmenu: function (data) {
                // console.log('wrapper div element contextmenu');
                // console.log(data);
            },
        }
    })
    .addTo(map);

L.control.custom({
        position: 'bottomright',
        content: '<img src="http://lorempixel.com/105/105/" class="img-thumbnail" id="demoImage">',
        classes: '',
        style: {
            margin: '0px 20px 20px 0',
            padding: '0px',
        },
    })
    .addTo(map);
