require('./bootstrap');
// import 'bootstrap';

var $ = require('jquery');

$(document).ready(function () {

  $(document).on('click', '.nav-item.nav-link',
  function() {
    $(this).addClass('active');
  })
});
