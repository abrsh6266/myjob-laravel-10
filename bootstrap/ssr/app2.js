import "bootstrap";
import axios from "axios";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
window.axios = axios;
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
const app = "";
const style = "";
const el = document.getElementById("app");
createApp({
  render: renderSpladeApp({ el })
}).use(SpladePlugin, {
  "max_keep_alive": 10,
  "transform_anchors": false,
  "progress_bar": true
}).mount(el);
