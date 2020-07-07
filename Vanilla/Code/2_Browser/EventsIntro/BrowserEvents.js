'use strict';

document.addEventListener("DOMContentLoaded", function() {
    let field = document.getElementById('field-with-onclicked-ball');

    field.addEventListener('click', function (event) {
        let ball = field.querySelector('#ball');
        let fieldRect = this.getBoundingClientRect();
        let mouseCoords = { x: event.clientX, y: event.clientY };

        // Calculate the coordinates of the ball
        let ballX = mouseCoords.x - fieldRect.x - parseInt( getComputedStyle(this).borderLeftWidth ) - ball.clientWidth / 2;
        let ballY = mouseCoords.y - fieldRect.y - parseInt( getComputedStyle(this).borderTopWidth ) - ball.clientHeight / 2;

        // Limit the position of the ball
        ballX = ballX < 0 ? 0 : (ballX > this.clientWidth - ball.clientWidth ? this.clientWidth - ball.clientWidth : ballX);
        ballY = ballY < 0 ? 0 : (ballY > this.clientHeight - ball.clientHeight ? this.clientHeight - ball.clientHeight : ballY);

        ball.style.left = ballX + 'px';
        ball.style.top = ballY + 'px';
    });
});

document.addEventListener("DOMContentLoaded", function() {
    let gallery = document.querySelector('#carousel .gallery ul');
    let images = gallery.querySelectorAll('img');

    let position = 0;
    let width = images[0].clientWidth;
    let count = 3;

    let previousArrow = document.querySelector('#carousel .arrow.previous');
    let nextArrow = document.querySelector('#carousel .arrow.next');


    previousArrow.addEventListener('click', function () {
        position += width * count;
        position = Math.min(position, 0);
        gallery.style.left = position + 'px';
    });

    nextArrow.addEventListener('click', function () {
        position -= width * count;
        position = Math.max( position, -width * (images.length - count) );
        gallery.style.left =  position+ 'px';
    })
});