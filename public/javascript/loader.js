document.addEventListener("DOMContentLoaded", function () {
    // Hide the loading screen when the page is fully loaded
    document.getElementById("loading-screen").style.display = "none";

    // Show the loading screen when navigating to another page
    document.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", function (event) {
            if (this.getAttribute("target") !== "_blank") { 
                document.getElementById("loading-screen").style.display = "flex";
            }
        });
    });
});