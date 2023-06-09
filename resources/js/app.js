import "./bootstrap";
import "mapbox-gl/dist/mapbox-gl.css";
import mapboxgl from "mapbox-gl"; // or "const mapboxgl = require('mapbox-gl');"

import {
    Modal,
    Ripple,
    initTE,
    Carousel,
    Datepicker,
    Collapse,
    Input,
} from "tw-elements";

// initTE({ Modal, Ripple, Carousel, Input });

// Initialization for ES Users
// import { Carousel, initTE } from "tw-elements";

initTE({ Modal, Carousel, Datepicker, Collapse });
// let gl = { mapboxgl };
// console.log("Map" + gl);
let gl = mapboxgl;
mapboxgl.accessToken =
    "pk.eyJ1IjoiZGllcHVscCIsImEiOiJjbGh0ZThwbzgxNzloM25vNWNsYWc1anNiIn0.pK8-aeHwcwxP3gAA_olvjA";
const map = new mapboxgl.Map({
    container: "map", // container ID
    // style: "mapbox://styles/mapbox/streets-v12",
    style: "mapbox://styles/diepulp/clhtet64u00pq01po9b49cxar",
    center: [-74.5, 40], // starting position [lng, lat]
    zoom: 9, // starting zoom
});
