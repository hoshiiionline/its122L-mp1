document.addEventListener("DOMContentLoaded", () => {
    const posters = document.querySelectorAll(".poster");
    const videoPlayer = document.getElementById("videoPlayer");
    const maxDuration = 60;
    const featureTitle = document.getElementById("feature-title");

    videoPlayer.addEventListener("timeupdate", () => {
        if (videoPlayer.currentTime >= maxDuration) {
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
            videoPlayer.play();
        }
    });
    
    posters.forEach(poster => {
        poster.addEventListener("click", () => {
            const videoSrc = poster.getAttribute("trailerid");
            videoPlayer.src = videoSrc;
            videoPlayer.play();

            const titleSrc = poster.getAttribute("titleid");
            featureTitle.textContent = titleSrc;
        });
    });
});

/* Mocha, Chai: initial setup */
mocha.setup("bdd");
const { assert, expect } = chai;

/* Write your tests below this line, treat the test given above as a reference */
describe("navbar", () => {
  it("should have one header element", () => {
    assert(
      $("header").length > 0,
      "could not find a `header` element in the page"
    );
  });
  // more tests to follow...
});

/* Do not edit anything below this line */
mochaEl = document.createElement("div");
mochaEl.id = "mocha";
mochaEl.style = "background: white; position: fixed; bottom: 0; width: 100%";
document.body.appendChild(mochaEl);
mocha.run();
