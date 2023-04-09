
console.log('Hello World!');
//ajax requests for the donation centers
    $(document).ready(function () {
     $('#city_location').on('change', function () {
         var idCity = this.value;
         $("#donation_center").html('');
         $.ajax({
             url: "{{url('api/fetch-donation-centers')}}",
             type: "POST",
             data: {
                 city_id: idCity,
                 _token: '{{csrf_token()}}'
             },
             dataType: 'json',
             success: function (res) {
                console.log(res.donation_centers.length);
                //if the response is success and the donation centers array is not empty
                    if ( res.donation_centers.length > 0)
                {
                   
                    //append the donation centers to the donation center select
                    $('#donation_center').html('<option value="">Select Donation Center</option>');
                    $.each(res.donation_centers, function (key, value) {
                        $("#donation_center").append('<option value="' + value
                            .id + '">' + value.center_name + '</option>');
                    });
                }
                else 
                {
                    //if the response is success and the donation centers array is empty
                    if (res.donation_centers.length == 0)
                    {
                        //append the donation centers to the donation center select
                        $('#donation_center').html('<option value="">No Donation Centers Available</option>');
                    }
                }
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


