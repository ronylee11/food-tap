//import "./bootstrap";

//alert("Hello World!");
const title = document.querySelector("#title");

const color = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];

title.addEventListener("click", () => {
    title.style.color = color[Math.floor(Math.random() * color.length)];
});
