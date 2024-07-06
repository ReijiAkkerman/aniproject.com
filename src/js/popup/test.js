function test() {
    let element = document.querySelector('#now');
    element.scroll(0, 1000);
}

document.addEventListener("DOMContentLoaded", function() {
    let element = document.querySelector('.now');
    element.addEventListener('click', test);
});