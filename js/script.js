 // Navbar
 $(document).ready(function(){
    $('.sidenav').sidenav();
  });

// Parallax
  $(document).ready(function(){
    $('.parallax').parallax();
  });


// Service worker
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('service-worker.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}