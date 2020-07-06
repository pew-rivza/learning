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