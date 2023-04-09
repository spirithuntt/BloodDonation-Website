
console.log('Hello World!');
$(document).ready(function() {
    $('#city_location').on('change', function() {
      var idCity = this.value;
      $("#donation_center").html('');
      var url = $('#city_location').data('url');
      var token = $('#city_location').data('token');
      $.ajax({
        url: url,
        type: "POST",
        data: {
          city_id: idCity,
          _token: token
        },
        dataType: 'json',
        success: function(res) {
          console.log(res.donation_centers.length);
          if (res.donation_centers.length > 0) {
            $('#donation_center').html('<option value="">Select Donation Center</option>');
            $.each(res.donation_centers, function(key, value) {
              $("#donation_center").append('<option value="' + value.id + '">' + value.center_name + '</option>');
            });
          } else {
            $('#donation_center').html('<option value="">No Donation Centers Available</option>');
          }
        },
        error: function(xhr, status, error) {
          console.error(xhr.responseText);
        }
      });
    });
  });
  



$(document).ready(function() {
    // Modal toggle
    $('[data-modal-toggle]').on('click', function() {
        var target = $(this).data('modal-target');
        $(target).toggleClass('hidden');
    });

    // Modal hide
    $('[data-modal-hide]').on('click', function() {
        var target = $(this).data('modal-hide');
        $(target).addClass('hidden');
    });

    // Modal backdrop
    $('[data-modal-backdrop]').on('click', function(e) {
        var target = $(this).data('modal-backdrop');
        if (e.target.id == target) {
            $(this).addClass('hidden');
        }
    });
});


//donation hours logic timepicker
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, {
        twelveHour:false
    });
});

//reservation hours logic timepicker
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.timepicker');
    var instances = M.Timepicker.init(elems, {
        twelveHour:false
    });
});


