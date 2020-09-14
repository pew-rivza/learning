'use strict';

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById('lazy-images').addEventListener('scroll', function () {
        let images = Array.from( this.querySelectorAll('img') );

        images.map(image => {
            let offsetTop = image.offsetTop;
            let offsetBottom = image.offsetTop + image.offsetHeight - this.offsetHeight;
            let scrollPosition = this.scrollTop;

             if (offsetTop >= scrollPosition
                 && offsetBottom <= scrollPosition
                 && image.dataset.src) {

                 image.src = image.dataset.src;
                 delete image.dataset.src
             }
        });
    });
});