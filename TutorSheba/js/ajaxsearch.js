function AjaxFunction() {
  var searchbyarea = document.getElementById("searchbyarea").value;
  var searchbyclass = document.getElementById("searchbyclass").value;
  var searchbysubject = document.getElementById("searchbysubject").value;

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("message").innerHTML = this.responseText;
    } else {
      document.getElementById("message").innerHTML = this.status;
    }
  };
  xhttp.open(
    "POST",
    "/TutorSheba/control/homecontrol.php?searchbyarea=" +
      searchbyarea +
      "&searchbyclass=" +
      searchbyclass +
      "&searchbysubject=" +
      searchbysubject,
    true
  );

  xhttp.send();
}
