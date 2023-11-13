/* script.js */

function addComment() {
    var comment = document.getElementById('commentInput').value;
    if (comment.trim() === '') {
        alert('Comments cannot be empty!');
        return;
    }

    var commentDiv = document.createElement('div');
    commentDiv.classList.add('comment');
    commentDiv.innerText = comment;

    var comments = document.getElementById('comments');
    comments.appendChild(commentDiv);

    document.getElementById('commentInput').value = '';
}