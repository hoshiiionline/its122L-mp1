document.addEventListener("DOMContentLoaded", () => {
    const posters = document.querySelectorAll(".poster");
    const videoPlayer = document.getElementById("videoPlayer");
    const featureTitle = document.getElementById("feature-title");

    posters.forEach(poster => {
        poster.addEventListener("click", () => {
            const videoSrc = poster.getAttribute("trailerid");
            videoPlayer.src = videoSrc;
            videoPlayer.play();

            const titleSrc = poster.getAttribute("titleid");
            featureTitle.textContent = titleSrc;
        });
    });

    document.getElementById("title") = titleSrc;

});