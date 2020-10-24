window.onload = function()
{
fetch('get_comments.php')
    .then(
        function (response) {
            if (response.status !== 200) {
                console.log('Looks like there was a problem. ' +
                    'Status Code: ' + response.status);
            }
            response.json().then(function (data) {
                const comments = data;
                console.log(comments);

                const parent = document.querySelector('#users-comments');

                for(const comment of comments) {
                const com = document.createElement('div');
                                
                com.setAttribute('data-id', comment.id);

                com.classList = 'user-com';


                const login = document.createElement('div');
                login.innerText = comment.login + " (#"+comment.id + ")";


                const ComText = document.createElement('div');
                ComText.innerText = comment.comment_text;

                com.appendChild(login);
                com.appendChild(ComText);

                console.log(com);

                parent.appendChild(com);
                }
            });
        })
    .catch(function (err) { 
        console.log('Fetch Error :-S', err);
    });
}