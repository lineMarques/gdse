import './bootstrap';
import { Map, View } from 'ol';
import TileLayer from 'ol/layer/Tile';
import OSM from 'ol/source/OSM';
import VectorSource from 'ol/source/Vector';
import VectorLayer from 'ol/layer/Vector';
import GeoJSON from 'ol/format/GeoJSON';

const file = 'postgis:map'

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

const vectorLayer = new VectorLayer({
    source: new VectorSource({
        format: new GeoJSON(),
        url: geo,
    })
});

const map = new Map({
    layers: [
        new TileLayer({
            source: new OSM(),
            label: 'OpenStreetMap'
        }),
        vectorLayer,

    ],
    target: 'map',
    view: new View({
        projection: "EPSG:4326",
        center: [-50.66406250000102,-13.15437605541888],
        zoom: 4.5
    })
});









