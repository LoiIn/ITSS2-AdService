$(document).ready(function () {
    // click ads
    $('.adClicks').click(function (e) { 
      e.preventDefault();
      var url = $(this).attr('data-href');
      var adId = $(this).attr('data-id');
      $.ajax({
        method: 'GET',
        url: url,
        data: "data",
        success: function (response) {
            console.log(response);
            $(`#modal-${adId}`).modal('show');
        }
    });
    });
  });