// Function to handle pagination navigation
function navigateToPage(pageNumber) {
    const currentUrl = new URL(window.location.href);
    currentUrl.searchParams.set('page', pageNumber);
    window.location.href = currentUrl.toString(); // Reloads the page with the new parameter
}

// Function to initialize pagination buttons
function initPaginationButtons() {
    const prevButton = document.getElementById('prevPageBtn');
    const nextButton = document.getElementById('nextPageBtn');

    if (prevButton) {
        prevButton.addEventListener('click', function() {
            const targetPage = parseInt(this.dataset.page);
            console.log(this.dataset.page);
            if (targetPage >= 1) {
                navigateToPage(targetPage);
            }
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', function() {
            const targetPage = parseInt(this.dataset.page);
            navigateToPage(targetPage);
        });
    }

    
    const currentUrl = new URL(window.location.href);

}

// Export the function so it can be imported by other files
export { navigateToPage, initPaginationButtons };

// Wenn initPaginationButtons sofort ausgeführt werden soll,
// sobald preview.js geladen ist, könntest du es auch direkt aufrufen:
// document.addEventListener('DOMContentLoaded', initPaginationButtons);
// Aber es ist oft besser, das über app.js zu steuern, wenn es der zentrale Einstiegspunkt ist.