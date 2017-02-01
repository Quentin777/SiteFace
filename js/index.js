elBody    = document.getElementsByTagName('body')[0],
elNavShow = document.getElementById('nav_show'),
elNavHide = document.getElementById('nav_hide');

elNavShow.addEventListener('click', function(e) {

  elBody.classList.toggle('nav_toggled');
  e.preventDefault();

});

/*
elNavShow.addEventListener('click', function(e) {

  elBody.classList.remove('nav_toggled');
  e.preventDefault();

});
*/