// function for random background card color
document.addEventListener("DOMContentLoaded", function() {
    // classes name array
    let backgroundClasses = ['cardBackgroundPsychic', 'cardBackgroundFire', 'cardBackgroundWater', 'cardBackgroundGrass'];

    let cardWrappers = document.querySelectorAll('.cardWrapper');

    // take a random class foreach element
    cardWrappers.forEach(function(cardWrapper) {
        let randomClass = backgroundClasses[Math.floor(Math.random() * backgroundClasses.length)];
        
        // add the random class
        cardWrapper.classList.add(randomClass);
    });
});