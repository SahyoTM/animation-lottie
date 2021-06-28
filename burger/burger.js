var animBurger = lottie.loadAnimation({
    container: document.getElementById('burger-icon'), // récupérer l'ID de la div
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'data.json' 
  });

$('#burger-icon').click(function()  {
  var duration = animBurger.getDuration(true);
  if (animBurger.currentFrame === 0) {
    animBurger.playSegments([0, duration], true);
  }
  else animBurger.playSegments([duration, 0], true);
});