let currentPageNumber = 1;

function nextPage() {
    document.getElementById(`page${currentPageNumber}`).classList.add("hidden");
    document.getElementById(`page${currentPageNumber+1}`).classList.remove("hidden");
    currentPageNumber++
}

