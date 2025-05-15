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





