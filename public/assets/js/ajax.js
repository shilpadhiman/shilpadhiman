// Get the elements with class="column"
var elements = document.getElementsByClassName("column col-md-3");

// Declare a loop variable
var i;

// List View
function listView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "100%";
  }
}

// Grid View
function gridView() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "25%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

//Searchform ajax call

$(document).ready(function(){
$("select").change(function(){
var val1= $( "#agedata" ).val();
//var val2= $( "#location" ).val();
var val3= $( "#genderdata" ).val();
var val4= $( "#castdata" ).val();

 $.ajax({
      type: 'POST',
      url:   url + 'dashboard/searchform',
      data: {age: val1 , location: val2, gender: val3, cast: val4},
      dataType:'jsonp',
      success: function(response) {
          $("#testerdata").html(response);
      
      },
      error: function(error){
         console.log(error); 
      }
      

  });


});

}); 
