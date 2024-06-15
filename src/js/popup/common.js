class Common {
    static activities_on;
    static links_on;

    static showActivities() {
        let elements = document.querySelectorAll('.common .hide');
        if(typeof Common.activities_on === 'undefined')
            Common.activities_on = false;
        if(Common.activities_on) {
            for(let i = 0; i < elements.length; i++) {
                elements[i].style.display = 'none';
            }
            Common.activities_on = false;
        }
        else {
            for(let i = 0; i < elements.length; i++) {
                elements[i].style.display = 'flex';
            }
            Common.activities_on = true;
        }
    }

    static showLinks() {
        let element = document.querySelector('.common .links > .cases');
        if(typeof Common.links_on === 'undefined')
            Common.links_on = false;
        if(Common.links_on) {
            element.style.display = 'none';
            Common.links_on = false;
        }
        else {
            element.style.display = 'flex';
            Common.links_on = true;
        }
    }
}

document.addEventListener('DOMContentLoaded', function() {
    let element = document.querySelector('.common .hider > button');
    element.addEventListener('click', Common.showActivities)
    element = document.querySelector('.common .links > .menu > button');
    element.addEventListener('click', Common.showLinks);
});