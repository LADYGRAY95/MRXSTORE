let videos = Array.from(document.querySelectorAll('#videoSlideshow video'));
videos[0].classList.add('current'); 
videos[0].play();

videos.forEach((video, index) => {
    video.onended = () => {
        video.classList.remove('current');
        let nextVideo = videos[(index + 1) % videos.length]; // Loop back to the first video after the last one
        nextVideo.classList.add('current');
        nextVideo.play();
    };
});