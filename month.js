const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Name of the Days',
        'name': 'day.mp4',
        'duration': '1:16',
    },
    {
        'id': 'a2',
        'title': 'Name of the days in bengali',
        'name': 'din.mp4',
        'duration': '1:55',
    },
    {
        'id': 'a2',
        'title': 'Name of the Months',
        'name': 'month.mp4',
        'duration': '2:20',
    },
    {
        'id': 'a3',
        'title': 'Name of the months in bengali',
        'name': 'ritu.mp4',
        'duration': '0:40',
    },
    {
        'id': 'a4',
        'title': 'Name of the Season in bengali',
        'name': 'ritu.mp4',
        'duration': '2:03',
    },
    {
        'id': 'a5',
        'title': 'Name of the seasons',
        'name': 'season.mp4',
        'duration': '4:05',
    },
    

];

data.forEach((video, i) => {
    let video_element = `
                <div class="video" data-id="${video.id}">
                    <img src="images/play.svg" alt="">
                    <p>${i + 1 > 9 ? i + 1 : '0' + (i + 1)}. </p>
                    <h3 class="title1">${video.title}</h3>
                    <p class="time">${video.duration}</p>
                </div>
    `;
    video_playlist.innerHTML += video_element;
})

let videos = document.querySelectorAll('.video');
videos[0].classList.add('active');
videos[0].querySelector('img').src = 'images/pause.svg';

videos.forEach(selected_video => {
    selected_video.onclick = () => {

        for (all_videos of videos) {
            all_videos.classList.remove('active');
            all_videos.querySelector('img').src = 'images/play.svg';

        }

        selected_video.classList.add('active');
        selected_video.querySelector('img').src = 'images/pause.svg';

        let match_video = data.find(video => video.id == selected_video.dataset.id);
        main_video.src = 'video/' + match_video.name;
        main_video_title.innerHTML = match_video.title;
    }
});
