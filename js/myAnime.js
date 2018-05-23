var pictureAnimation = anime({
    targets: '.about_main',
    opacity: 1,
    duration: 2000,
    easing: 'linear'
});

var animationStart = anime.timeline({
  autoplay: false,
  direction: 'reverse',
  delay: 0
});
animationStart
.add({
  targets: ['.nav_mobile'],
  scaleX: [0, 1],
	opacity: 1,
	duration: 2000,
	easing: 'easeInOutQuart',
  loop: true

})
.add({
  targets: ['.mobile_nav_ul', '.sotialNetworks'],
  duration: 1,
  delay:0,
  loop: true
});
var hamburgerAnimation = anime({
  targets: ['.top'],
  autoplay: false,
  direction: 'reverse',
  delay: 1000,
  rotate: 45,
  autoplay: false
});

document.querySelector('.hamburger').onclick = function() {
  animationStart.play();
  animationStart.reverse();
  hamburgerAnimation.play();
  hamburgerAnimation.reverse();
}
