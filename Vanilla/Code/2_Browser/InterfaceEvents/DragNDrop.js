'use strict';

document.addEventListener("DOMContentLoaded", function () {
    let dog = document.getElementById('dog');
    let hotDog = document.getElementById('hot-dog');
    let currentDroppable = null;

    dog.onmousedown = function (event) {
        let shiftX = Math.abs(event.clientX - dog.getBoundingClientRect().left);
        let shiftY = Math.abs(event.clientY - dog.getBoundingClientRect().top);

        dog.style.position = 'absolute';
        dog.style.zIndex = '1000';
        togglePows(true)
        document.body.append(dog);

        moveAt(event.pageX, event.pageY, dog);

        document.addEventListener('mousemove', onMouseMove);

        dog.onmouseup = function() {
            hotDog.style.backgroundColor = '#f9cb38';

            if (currentDroppable) {
                dog.style.zIndex = 'initial';
                document.getElementById('hot-dog').append(dog);
                dog.style.top = '-6px';
                dog.style.left = '-23px';
                dog.style.cursor = 'default';

                let pows = Array.from( dog.querySelectorAll('[id*=pow]') );
                pows.forEach(pow => pow.style.display = 'none');
                document.getElementById('tongue').style.display = 'flex';

                dog.onmousedown = null;
            } else {
                dog.style.position = 'relative';
                dog.style.zIndex = 'initial';
                document.getElementById('dog-with-hot-dog').append(dog);
                dog.style.top = '0';
                dog.style.left = '0';
            }

            document.removeEventListener('mousemove', onMouseMove);
            togglePows(false);
            dog.onmouseup = null;
        };

        function onMouseMove(event) {
            moveAt(event.pageX, event.pageY, dog);

            dog.hidden = true;
            let elementBelow = document.elementFromPoint(event.clientX, event.clientY);
            dog.hidden = false;
            if (!elementBelow) return;

            let droppableBelow = elementBelow.closest('.droppable');

            if (currentDroppable !== droppableBelow) {
                if (currentDroppable) {
                    hotDog.style.backgroundColor = '#f9cb38';
                }
                currentDroppable = droppableBelow;
                if (currentDroppable) {
                    hotDog.style.backgroundColor = '#ffd95f';
                }
            }
        }

        function togglePows(up) {
            let pows = Array.from( dog.querySelectorAll('[id*=pow]') );
            pows.forEach(pow => pow.style.height = (up ? 0 : 13) + 'px');
        }

        function moveAt(x, y, element) {
            element.style.left = x - shiftX + 'px';
            element.style.top = y - shiftY + 'px';
        }
    };
});