const showPopup = () => {
  //handle show popup
  $(".popup").addClass("popup--show");
};

// function - Hide popup & body scroll off
const hidePopup = () => {
  $(".popup").removeClass("popup--show");

  // pause all video after close popup
  const allVideos = $(".video-element");
  for (let i = 0; i < allVideos.length; i++) {
    const element = allVideos[i];
    element.pause();
    element.removeAttribute("controls");
  }
  const allMaskVideo = $(".mask-video");
  for (let i = 0; i < allMaskVideo.length; i++) {
    const maskItem = allMaskVideo[i];
    maskItem.style.display = "flex";
  }
};
// Hide popup on click close button
$(".popup__close").on("click", hidePopup);

// Hide popup on click outside of popup
$(".popup").on("click", function (event) {
  if (event.target.classList.contains("popup")) {
    hidePopup();
  }
});

$(".list-teach-wrapper .slider-item").on("click", function () {
  showPopup();
  const teacherImageUrl = $(this)
    .find(".teacher-image-wrapper .teacher-image")
    .attr("src");
  const flagImageUrl = $(this)
    .find(".teacher-image-wrapper .flag-image")
    .attr("src");
  const teacherName = $(this).find(".teacher-name").text().trim();
  const sinceValue = $(this)
    .find(".teacher-info-wrapper .value")
    .first()
    .text()
    .trim();
  const certificateValue = $(this)
    .find(".teacher-info-wrapper .certificate")
    .text();

  $(".popup .popup__body .popup-content .teacher-image").attr(
    "src",
    teacherImageUrl
  );
  $(".popup .popup__body .popup-content .flag-image").attr("src", flagImageUrl);
  $(".popup .popup__body .popup-content .teacher-name").text(teacherName);
  $(".popup .popup__body .popup-content .teacher-info-wrapper .value")
    .first()
    .text(sinceValue);

  $(
    ".popup .popup__body .popup-content .teacher-info-wrapper .certificate"
  ).text(certificateValue);
});
