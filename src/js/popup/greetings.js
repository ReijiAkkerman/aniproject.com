class Greetings {
    static showLoginSection() {
        let element = document.querySelector('#login_form');
        element.style.display = 'block';
        Greetings.hideRegistrationSection();
    }

    static showRegistrationSection() {
        let element = document.querySelector('#registration_form');
        element.style.display = 'block';
        Greetings.hideLoginSection();
    }

    static hideLoginSection() {
        let element = document.querySelector('#login_form');
        element.style.display = 'none';
    }
    
    static hideRegistrationSection() {
        let element = document.querySelector('#registration_form');
        element.style.display = 'none';
    }
}

document.addEventListener('DOMContentLoaded', function () {
    let element = document.querySelector('#login_section');
    element.addEventListener('click', Greetings.showLoginSection);
    element = document.querySelector('#registration_section');
    element.addEventListener('click', Greetings.showRegistrationSection);
});