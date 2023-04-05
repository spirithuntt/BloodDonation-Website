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

