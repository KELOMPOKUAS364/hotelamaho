// Mengatur toggle untuk sidebar
document.querySelector('.toggle-btn').addEventListener('click', function () {
    document.querySelector('.sidebar').classList.toggle('active');
    document.querySelector('.main-content').classList.toggle('active');
});
