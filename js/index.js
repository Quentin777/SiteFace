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








$(document).ready(function() {
  //$('h1').css({color: 'red'})
  $('li img').on('click', function () {
        var src = $(this).attr('src');
        var img = '<img src="' + src + '" class="img-responsive"/>';
        $('#myModal').modal();
        $('#myModal').on('shown.bs.modal', function () {
            $('#myModal .modal-body').html(img);
        });
        $('#myModal').on('hidden.bs.modal', function () {
            $('#myModal .modal-body').html('');
        });
    });
});