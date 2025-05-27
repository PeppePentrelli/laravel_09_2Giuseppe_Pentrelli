console.log('ciao');


document.addEventListener('DOMContentLoaded', function () {
    const videoPlayer = document.getElementById('mainVideo');
    const thumbnails = document.querySelectorAll('.stile-thumb');
    const nomeStile = document.getElementById('nomeStile');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', function () {
            const newVideoSrc = this.dataset.video;
            const newNome = this.dataset.nome;
            videoPlayer.src = newVideoSrc;
            videoPlayer.load();
            videoPlayer.play();

            nomeStile.textContent = newNome;
        });
    });
});



const countdown = () => {
    const countdownEl = document.getElementById("countdown");
    if (!countdownEl) return;

    const endDate = new Date('2025-06-05T23:59:00').getTime();
    const now = new Date().getTime();
    const distance = endDate - now;

    if (distance < 0) {
        countdownEl.innerHTML = "Contest terminato!";
        return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    countdownEl.innerHTML = `${days}g ${hours}h ${minutes}m ${seconds}s`;
};

setInterval(countdown, 1000);
countdown();
