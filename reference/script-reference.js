document.addEventListener("DOMContentLoaded", () => {
    const posters = document.querySelectorAll(".poster");
    const featuredTitle = document.getElementById("featured-title");
    const featuredDescription = document.getElementById("featured-description");
    const featuredVideo = document.getElementById("featured-video");

    posters.forEach(poster => {
        poster.addEventListener("click", () => {
            const title = poster.getAttribute("data-title");
            const description = poster.getAttribute("data-description");
            const trailer = poster.getAttribute("data-trailer");

            // Update the featured section
            featuredTitle.textContent = title;
            featuredDescription.textContent = description;
            featuredVideo.src = trailer;
            featuredVideo.play();
        });
    });
});
