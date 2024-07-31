import './bootstrap';
import '../css/app.css';

let alertBox = document.querySelector('.alert');
let logoutDialogBox = document.querySelector('#logout-dialog');
let deleteDialogBox = document.querySelector('#delete-dialog');
let logoutBtn = document.querySelector('.logout-btn');
let cancelBtn = document.querySelectorAll('.cancel-btn');
let deleteBtn = document.querySelectorAll('.delete-btn');

if(alertBox) { 
    document.querySelector('.dismiss-alert').addEventListener('click', function() {
        alertBox.classList.add('hidden');
    });
}

cancelBtn.forEach((btn) => {
    btn.addEventListener('click', function() {
        logoutDialogBox.classList.add('hidden');
        deleteDialogBox.classList.add('hidden');
    })
});

deleteBtn.forEach((btn) => {
    btn.addEventListener('click', function() {
        deleteDialogBox.classList.remove('hidden');
    })
});

if(logoutBtn) {
    logoutBtn.addEventListener('click', function() {
        logoutDialogBox.classList.remove('hidden');
    });
}

