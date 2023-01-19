const playSound = function() {
    document.getElementById('magicSound').play();
    document.removeEventListener('click', playSound);
}
document.addEventListener('click', playSound);