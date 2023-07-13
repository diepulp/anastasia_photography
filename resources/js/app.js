import "./bootstrap";
import "mapbox-gl/dist/mapbox-gl.css";
import mapboxgl from "mapbox-gl"; // or "const mapboxgl = require('mapbox-gl');"
import axios from "axios";

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
// let gl = mapboxgl;
// mapboxgl.accessToken =
//     "pk.eyJ1IjoiZGllcHVscCIsImEiOiJjbGh0ZThwbzgxNzloM25vNWNsYWc1anNiIn0.pK8-aeHwcwxP3gAA_olvjA";
// const map = new mapboxgl.Map({
//     container: "map", // container ID
//     // style: "mapbox://styles/mapbox/streets-v12",
//     style: "mapbox://styles/diepulp/clhtet64u00pq01po9b49cxar",
//     center: [-74.5, 40], // starting position [lng, lat]
//     zoom: 9, // starting zoom
// });

console.log(axios.isCancel("something"));

// let convert = async () => {
//     let markdown = document.querySelector("#markdown").value;

//     axios.post("playground", { markdown }).then((res) => console.log(res));
// };
// convert()4
let convert = () => {
    return "hello from convert";
};
console.log(convert());
console.log("test");
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;
console.log(csrfToken)
async function postData() {
    try {
        const response = await axios.post("http://127.0.0.1/playground", {
            // Request payload or data
            key1: "value1",
            key2: "value2",
            
        });

        console.log(response.data);
        // Handle the response data as needed
    } catch (error) {
        console.error(error);
        // Handle any errors that occur during the request
    }
}

postData();
