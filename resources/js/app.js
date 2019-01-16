
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
/**
 * Para el thumbnail del detalle de la oferta
 * @type {NodeListOf<Element>}
 */
// select all thumbnails
const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
// select featured
const galleryFeatured = document.querySelector(".product-gallery-featured img");

// loop all items
galleryThumbnail.forEach((item) => {
    item.addEventListener("mouseover", function () {
        let image = item.children[0].src;
        galleryFeatured.src = image;
    });
});

// show popover
$(".main-questions").popover('show');
