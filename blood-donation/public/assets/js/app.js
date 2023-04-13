//!code for the donation center dropdown
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
  //!parsley
  $(form).parsley();
   //!parsley
// JavaScript code for the dashboard table search input
function handleDashboardSearch() {
  // Get the input field and the table rows
  const searchInputDashboard = document.getElementById('dashboardSearchInput');
  const tableRowsDashboard = document.querySelectorAll('#dashboardTable tbody tr');
  
  // Convert the search input value to lowercase
  const searchTermDashboard = searchInputDashboard.value.toLowerCase();
  
  // Loop through all the table rows
  tableRowsDashboard.forEach(row => {
    // Get the row's text content and convert to lowercase
    const rowTextDashboard = row.textContent.toLowerCase();
    
    // If the row text contains the search term, show the row
    // Otherwise, hide the row
    if (rowTextDashboard.includes(searchTermDashboard)) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
}

// JavaScript code for the donations table search input
function handleDonationSearch() {
  // Get the input field and the table rows
  const searchInputDonation = document.getElementById('donationSearchInput');
  const tableRowsDonation = document.querySelectorAll('#donationTable tbody tr');
  
  // Convert the search input value to lowercase
  const searchTermDonation = searchInputDonation.value.toLowerCase();
  
  // Loop through all the table rows
  tableRowsDonation.forEach(row => {
    // Get the row's text content and convert to lowercase
    const rowTextDonation = row.textContent.toLowerCase();
    
    // If the row text contains the search term, show the row
    // Otherwise, hide the row
    if (rowTextDonation.includes(searchTermDonation)) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  });
}

// Attach event listeners to the search inputs
const searchInputDashboard = document.getElementById('dashboardSearchInput');
searchInputDashboard.addEventListener('input', handleDashboardSearch);

console.log("test");

const searchInputDonation = document.getElementById('donationSearchInput');
searchInputDonation.addEventListener('input', handleDonationSearch);




//!dropdown for donation in dashboard
const dropdownToggleButtons = document.querySelectorAll('[data-dropdown-toggle]');
dropdownToggleButtons.forEach(button => {
const donationId = button.dataset.dropdownToggle.split('_')[1];
const dropdownId = `dropdownDots_${donationId}`;
let dropdown = document.getElementById("dropdownId");
dropdown.classList.toggle("hidden");
});


//!dropdown for centers  table
const dropdownToggleButtonsCenters = document.querySelectorAll('[data-dropdown-toggle]');
        
dropdownToggleButtonsCenters.forEach(button => {
  const centerId = button.dataset.dropdownToggle.split('_')[1];
  const dropdownId = `dropdownDots_${centerId}`;
  
  // get the dropdown element by its id
  const dropdown = document.getElementById(dropdownId);

  button.addEventListener('click', () => {
    // toggle the 'hidden' class to show/hide the dropdown
    dropdown.classList.toggle('hidden');
  });
});
  

//!dropdown for cities table
const dropdownDotsCities = document.getElementById("dropdownDotsCities");
const dropdownMenuIconHorizontalButtonCities = document.getElementById("dropdownMenuIconHorizontalButtonCities");
console.log("dropdownDotsCities", dropdownDotsCities);
document.addEventListener("click", function(event) {
  if (!dropdownDotsCities.contains(event.target)) {
    dropdownDotsCities.classList.add("hidden");
  }
});

dropdownMenuIconHorizontalButtonCities.addEventListener("click", function() {
  dropdownDotsCities.classList.toggle("hidden");
});




//!modal
// $(document).ready(function() {
//     // Modal toggle
//     $('[data-modal-toggle]').on('click', function() {
//         var target = $(this).data('modal-target');
//         $(target).toggleClass('hidden');
//     });

//     // Modal hide
//     $('[data-modal-hide]').on('click', function() {
//         var target = $(this).data('modal-hide');
//         $(target).addClass('hidden');
//     });

//     // Modal backdrop
//     $('[data-modal-backdrop]').on('click', function(e) {
//         var target = $(this).data('modal-backdrop');
//         if (e.target.id == target) {
//             $(this).addClass('hidden');
//         }
//     });
// });




// //donation hours logic timepicker
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.timepicker');
//     var instances = M.Timepicker.init(elems, {
//         twelveHour:false
//     });
// });

// //reservation hours logic timepicker
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.timepicker');
//     var instances = M.Timepicker.init(elems, {
//         twelveHour:false
//     });
// });


