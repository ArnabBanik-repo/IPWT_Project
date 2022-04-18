let submit = document.getElementById("submit");

submit.addEventListener("click", function () {
  console.log("Test");
  let fname = document.getElementById("fname").value;
  let lname = document.getElementById("lname").value;
  let phone = document.getElementById("phone").value;
  let mail = document.getElementById("email").value;
  let seats = document.getElementById("seats").value;
  let time = document.getElementById("time").value;

  let xhr = new XMLHttpRequest();
  xhr.open(
    "GET",
    "bookTable.php?fname=" +
      fname +
      "&lname=" +
      lname +
      "&phone=" +
      phone +
      "&mail=" +
      mail +
      "&seats=" +
      seats +
      "&time=" +
      time
  );

  xhr.onload = function () {
    document.getElementById("bookingStatus").innerHTML = this.responseText;
  };

  xhr.send();
});
