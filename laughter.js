const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Lesson 01',
        'name': 'l1.mp4',
        'duration': '5:40',
    },
    {
        'id': 'a2',
        'title': 'Lesson 02',
        'name': 'l2.mp4',
        'duration': '6:50',
    },
    {
        'id': 'a3',
        'title': 'lesson 03',
        'name': 'l3.mp4',
        'duration': '6:50',
    },
    {
        'id': 'a4',
        'title': 'lesson 04',
        'name': 'l4.mp4',
        'duration': '6:50',
    },
    {
        'id': 'a5',
        'title': 'lesson 05',
        'name': 'l5.mp4',
        'duration': '6:50',
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
