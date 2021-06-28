var animInput = lottie.loadAnimation({
    container: document.getElementById('anim-input'), // récupérer l'ID de la div
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'data.json' 
  });

  var animInputVM = lottie.loadAnimation({
    container: document.getElementById('anim-vm'), // récupérer l'ID de la div
    renderer: 'svg',
    loop: false,
    autoplay: false,
    path: 'data.json' 
  });

  var valueMail = $('.input-email');

$('.input-email').keypress(function() {
    var duration = animInput.getDuration(true);
    var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    if (valueMail.val().match(re)) {
        animInput.playSegments([0, duration], true);
    }

    $('.input-email').val().change(function() {
        animInput.playSegments([duration, 0], true);
        alert("test");
    });
    
});

$('.input-vm').keypress(function() {
    var duration = animInputVM.getDuration(true);
    if ($('.input-vm').val() === $('.input-email').val()) {
        animInputVM.playSegments([0, duration], true);
    }
    
});

