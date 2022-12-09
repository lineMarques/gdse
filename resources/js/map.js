import './bootstrap';
import { Map, View } from 'ol';
import TileLayer from 'ol/layer/Tile';
import OSM from 'ol/source/OSM';
import VectorSource from 'ol/source/Vector';
import VectorLayer from 'ol/layer/Vector';
import GeoJSON from 'ol/format/GeoJSON';
import { Circle, Fill, Stroke, Style, Text } from 'ol/style';

const file = 'postgis:multi'
const paramsObj = {
    servive: 'WFS',
    version: '1.0.0',
    request: 'GetFeature',
    typeName: file,
    maxFeatures: '50',
    outputFormat: 'application/json',
}

const urlParams = new URLSearchParams(paramsObj)
const geo = 'http://localhost:8081/geoserver/postgis/wfs?' + urlParams.toString()


function styles(feature) {

    return new Style({
        fill: new Fill({
            color: '#92EBC1',
        }),
        stroke: new Stroke({
            color: 'blue',
            width: 2,
        }),
        image: new Circle({
            radius: 6,
            fill: new Fill({
                color: 'gray',
            }),
            stroke: new Stroke({
                color: 'blue',
                width: 2,
            }),
        }),
        text: new Text({
            font: "12px sans-serif",
            textAlign: "left",
            text: feature.get("município"),
            offsetY: -15,
            offsetX: 5,
            padding: [5, 2, 2, 5],
        }),
    })
}

const vectorLayer = new VectorLayer({
    style: styles,
    source: new VectorSource({
        format: new GeoJSON(),
        url: geo,
    })
});

const map = new Map({
    target: 'map',
    layers: [
        new TileLayer({
            source: new OSM(),
            label: 'OpenStreetMap'
        }),
        vectorLayer,

    ],

    view: new View({
        projection: "EPSG:4326",
        center: [-50.66406250000102, -13.15437605541888],
        zoom: 4
    })


});
