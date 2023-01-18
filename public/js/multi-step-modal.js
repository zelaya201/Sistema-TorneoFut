var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("step");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Guardar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("step");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab == x.length) {
    // ... the form gets submitted:
    document.getElementById("signUpForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.querySelectorAll("step");
  //y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  /* for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }*/
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
  } 
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("stepIndicator");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

/* $('[name="equipos[]"]').change(function() {


  var arr = $('[name="equipos[]"]:checked').map(function(){
    return this.value;
  }).get();
  
 // var str = arr.join(',');
  
  $('#arr').text(JSON.stringify(arr));

  console.log(arr);

  arr.forEach(equipo => {
    if ($('#' + equipo.replace(/ /g, "")).length == 0) {
      $('#select_equipos').append('<div class="col-md-3 mb-3" id="' + equipo.replace(/ /g, "")  + '"><button type="button" class="btn btn-primary position-relative">'+ equipo + '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><i class="fa-solid fa-xmark"></i><span class="visually-hidden">unread messages</span></span></button></div>')
    }
  });
}); */

$('#nuevoTorneoModal').on('show.bs.modal', function (event) {
  /* Limpiar modal */
  var x = document.getElementsByClassName("step");
  var y = document.querySelectorAll(".stepIndicator");
  x[currentTab].style.display = "none";
  
  for (let i = 0; i < y.length; i++) {
    y[i].classList.remove('finish');
  }

  currentTab = 0;
  showTab(currentTab);

  /* Limpiar modal */

  $("#nuevoTorneoModal").find("input[name='nomTorneo']").val("");
  $("#nuevoTorneoModal input[type='checkbox']").prop('checked', false).change();
});