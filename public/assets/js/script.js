document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();

    if (username === '' || password === '') {
        const errorMessage = document.getElementById('errorMessage');
        errorMessage.textContent = 'Please fill out all fields.';
        errorMessage.classList.remove('hidden'); 
    } else {
        document.getElementById('errorMessage').classList.add('hidden'); 
        window.location.href = '/about';
    }
});
