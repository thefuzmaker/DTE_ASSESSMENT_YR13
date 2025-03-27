document.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link"); // Get all nav links
    const contentDiv = document.getElementById("content"); // Get content area
    const loadingScreen = document.getElementById("loading-screen"); // Get loading screen

    links.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault(); // Stop normal page reload
            let pageUrl = this.getAttribute("href"); // Get the new page URL

            // Fade out current content
            contentDiv.style.opacity = "0";
            contentDiv.style.transform = "translateY(20px)";

            setTimeout(() => {
                // Show loading screen
                loadingScreen.style.display = "flex";

                setTimeout(() => {
                    // Fetch new content with AJAX
                    fetch(pageUrl)
                        .then(response => response.text())
                        .then(data => {
                            contentDiv.innerHTML = data; // Replace content

                            // Hide loading screen & fade in new content
                            loadingScreen.style.display = "none";
                            contentDiv.style.opacity = "1";
                            contentDiv.style.transform = "translateY(0)";
                        });
                }, 1000); // Show loading for 1 second
            }, 300); // Initial fade-out delay
        });
    });
});