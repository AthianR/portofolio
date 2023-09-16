const thumbnails = document.querySelectorAll(".thumbnail");
const overlay = document.getElementById("overlay");
const closeButton = document.getElementById("close-button");
const fullImage = document.getElementById("full-image");
function showOverlay(imageSrc) {
    fullImage.src = imageSrc;
    overlay.style.display = "flex";
}
function hideOverlay() {
    overlay.style.display = "none";
}
thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {
        const imageSrc = thumbnail.getAttribute("data-image");
        showOverlay(imageSrc);
    });
});
closeButton.addEventListener("click", () => {
    hideOverlay();
});
fullImage.addEventListener("click", () => {
    hideOverlay();
});
