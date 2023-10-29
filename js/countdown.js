// dateString format: YYYY/MM/DD HH:mm:ss: example 2023/20/11 00:00:00
// dateSelector: selector select day element
// hourSelector: selector select hour element
// minuteSelector: selector select minutes element
// minuteSelector: selector select minutes element
// secondSelector: selector select minutes element
function countdownTimeStart(
  dateString,
  dateSelector,
  hourSelector,
  minuteSelector,
  secondSelector
) {
  var countDownDate = new Date(dateString).getTime();

  // Update the count down every 1 second
  var x = setInterval(function () {
    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    // Time calculations for days, hours, minutes and seconds
    var hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"

    document.querySelector(dateSelector).innerHTML = String(days).padStart(
      2,
      "0"
    );
    document.querySelector(hourSelector).innerHTML = String(hours).padStart(
      2,
      "0"
    );
    document.querySelector(minuteSelector).innerHTML = String(minutes).padStart(
      2,
      "0"
    );
    document.querySelector(secondSelector).innerHTML = String(seconds).padStart(
      2,
      "0"
    );

    // If the count down is over, write some text
    if (distance < 0) {
      clearInterval(x);
      document.querySelector(dateSelector).innerHTML = "00";
      document.querySelector(hourSelector).innerHTML = "00";
      document.querySelector(minuteSelector).innerHTML = "00";
      document.querySelector(secondSelector).innerHTML = "00";
    }
  }, 1000);
}
