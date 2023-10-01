document.addEventListener("DOMContentLoaded", () => {
  const iconVideo = document.querySelector(".icon-play")
  const video = document.querySelector(".video-experience");
  const imageMobile = document.querySelector(".image-mobile")
  const playVideo = (icon, video, image) => {
    icon.addEventListener("click", (e) => {
      e.preventDefault();
      if(video.paused) {
        video.play()
        image.style.opacity = 0
      }else {
        video.pause();
        image.style.opacity = 1
      }
    })
  }
  const listenEventPauseVideo = (icon, video) => {
    video.addEventListener("ended", () => {
      icon.style.opacity = 1
    }, false)
  }
  playVideo(iconVideo, video, iconVideo)
  listenEventPauseVideo(iconVideo,video)
}, false)