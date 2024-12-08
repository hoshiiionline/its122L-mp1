document.addEventListener("DOMContentLoaded", () => {
    const posters = document.querySelectorAll(".poster");
    const videoPlayer = document.getElementById("videoPlayer");
    const headerElement = document.getElementById("header"); //
    const maxDuration = 60;

    videoPlayer.play();

    videoPlayer.addEventListener("timeupdate", () => {
        if (videoPlayer.currentTime >= maxDuration) {
            videoPlayer.pause();
            videoPlayer.currentTime = 0;
            videoPlayer.play();
        }
    });
    
    posters.forEach(poster => {
        poster.addEventListener("click", () => {
            //change
            posters.forEach(p => p.classList.remove("selected"));
            poster.classList.add("selected");
            const title = poster.getAttribute("titleid");
            if (headerElement) {
              headerElement.textContent = `${headerElement.textContent.split(' |')[0]}`; 
              headerElement.textContent += ` | Now Playing: ${title}`;
          }


            const videoSrc = poster.getAttribute("trailerid");
            videoPlayer.src = videoSrc;
            videoPlayer.play();

        });
    });
});

mocha.setup("bdd");
const { assert, expect } = chai;

describe("navbar", () => {
  it("should have one header element", () => {
    assert(
      $("header").length > 0,
      "could not find a `header` element in the page"
    );
  });
});

mochaEl = document.createElement("div");
mochaEl.id = "mocha";
mochaEl.style = "background: white; position: fixed; bottom: 0; width: 100%";
document.body.appendChild(mochaEl);
mocha.run();
