function toggleComments(id) {
    const comments = document.getElementById(id);
    if (comments.style.display === "none" || comments.style.display === "") {
        comments.style.display = "block";
    } else {
        comments.style.display = "none";
    }
}
