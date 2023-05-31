import ImageLayer from 'ol/layer/Image.js';
import Map from 'ol/Map.js';
import Projection from 'ol/proj/Projection.js';
import Static from 'ol/source/ImageStatic.js';
import View from 'ol/View.js';
import {getCenter} from 'ol/extent.js';
import HexGrid from 'ol-ext/render/HexGrid.js';
import HexMap from 'ol-games/source/HexMap.js';
import Image from 'ol/layer/Image.js';
import Popup from 'ol-ext/Overlay/Popup.js';
import Style from 'ol/style/Style';
import Fill from 'ol/style/Fill';
import Stroke from 'ol/style/Stroke';
import Feature from 'ol/Feature';
import Polygon from 'ol/geom/Polygon';
import LayerVector from 'ol/layer/Vector';
import SourceVector from 'ol/source/Vector';

// Map views always need a projection.  Here we just want to map image
// coordinates directly to map coordinates, so we create a projection that uses
// the image extent in pixels.
const extent = [0, 0, 4096, 2304];
const projection = new Projection({
    code: 'xkcd-image',
    units: 'pixels',
    extent: extent,
});

const map = new Map({
    layers: [
        new ImageLayer({
            source: new Static({
                attributions: 'Oltréé !<br/>Campagne : Viens dans mon slip on est déjà quatres',
                url: 'https://i.redd.it/3ii2yn0uztj91.jpg',
                //url: 'https://imgs.xkcd.com/comics/online_communities.png',
                projection: projection,
                imageExtent: extent,
            }),
        }),
    ],
    target: 'map',
    view: new View({
        center: getCenter(extent),
        extent: extent
    }),
});

const view = map.getView();
view.fit(extent, { constrainResolution: false });
view.setMinZoom(view.getZoom());

const grid = new HexGrid ({ size:20, origin: map.getView().getCenter() });
const hex = new HexMap({ hexGrid: grid });
const gridLayer = new Image({ source: hex, minZoom:view.getZoom() })
map.addLayer (gridLayer);
hex.showCoordiantes('axial');

const greenStyle = new Style({
    fill: new Fill({ color: 'rgba(0,255,0,0.2)' }),
    stroke: new Stroke({ color: 'green', width: 1.25 })
});

// Popup
const popup = new Popup (
    {	popupClass: "tooltips",
        positioning: 'auto'
    }
);

const vector = new LayerVector({
    source: new SourceVector(),
    style: greenStyle
});
map.addLayer(vector);

let current = [];

function gotoCoord(x, y) {
    view.setCenter(grid.hex2coord([x,y]));
}

map.on(["click"], function(e) {
    vector.getSource().clear();
    var size = map.getSize();
    size = Math.round( Math.max(size[0],size[1]) / grid.getSize() * map.getView().getResolution() / Math.sqrt(3) );
    var h = grid.coord2hex(e.coordinate);

    if (h[0]==current[0] && h[1]==current[1]) {
        current = [];
        return;
    }

    //gotoCoord(...h);
    current = h;
    vector.getSource().addFeature(new Feature(
        new Polygon([grid.getHexagon(h)])
    ));

    console.log('On click hex coords : '+h[0]+', '+h[1]);
});

/*view.setZoom(18.234585335589976);
gotoCoord(31, 25);*/
let currZoom = view.getZoom();
map.on('move', function(e) {
    gridLayer.setVisible(false);
    console.log('Move start');
});
map.on('moveend', function(e) {
    gridLayer.setVisible(true);
    console.log('Move End');
    if(currZoom !== view.getZoom()) {
        console.log('Zoom changed : '+view.getZoom());
    }
});

/*
map.on(["pointermove", "click"], function(e) {
    console.log('pointermove');
});*/
