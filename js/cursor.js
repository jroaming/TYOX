const cursor = document.getElementById("cursor");
const offset = 2;

var interactiveElements = document.getElementsByClassName("cursor-trigger");

window.addEventListener('mousemove', (e) => {
    cursor.style.opacity = 1;
    cursorMove(e);
    cursor.setAttribute('data-fromTop', (cursor.offsetTop - scrollY));
});

window.addEventListener('scroll', (e) => {
    cursor.style.opacity = 1;
    cursorScroll();
});

for (var iElement=0; iElement < interactiveElements.length; iElement++) {
    interactiveElements[iElement].addEventListener('mouseenter', (e) => {
        cursor.src = "res/images/cursors/custom_cursor_02-color-mid.png";
    });

    interactiveElements[iElement].addEventListener('mouseleave', (e) => {
        cursor.src = "res/images/cursors/custom_cursor_02-gray-mid.png";
    });
}

function cursorScroll() {
    const fromTop = parseInt(cursor.getAttribute('data-fromTop'));
    cursor.style.top = fromTop + scrollY + "px";
}

function cursorMove(e) {
    cursor.style.left = (e.pageX - offset) + "px";
    cursor.style.top = (e.pageY - offset) + "px";
}