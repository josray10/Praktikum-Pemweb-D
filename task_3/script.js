var pHeader = document.querySelector("div.headerText p");
pHeader.innerText =
  "I am 5th semester informatics student in Institut Teknologi Sumatera. [Ini adalah penambahan teks memakai DOM]";

var figcaption = document.getElementsByTagName("figcaption")[0];
figcaption.remove();

var tambahButton = document.createElement("button");
tambahButton.innerHTML = "Random Video";

var figure = document.getElementsByTagName("figure")[0];
figure.appendChild(tambahButton);

var buttonBaru = document.querySelector("figure button");
buttonBaru.style.display = "inline-block";
buttonBaru.style.backgroundColor = "#04aa6d";
buttonBaru.style.borderRadius = "5px";
buttonBaru.style.fontSize = "20px";
buttonBaru.style.fontFamily = "Source Sans Pro, sans-serif";
buttonBaru.style.padding = "6px 18px";

var videos = [
  "assets/video1.mp4",
  "assets/video2.mp4",
  "assets/video3.mp4",
  "assets/video4.mp4",
  "assets/video5.mp4",
];

var videoSudahDimainkan = [];

var videoId = getRandomInt(0, 4);
var tagVideo = document.getElementById("video");
tagVideo.setAttribute("src", videos[videoId]);

buttonBaru.addEventListener("click", function (e) {
  var nextId = getRandomInt(0, 4);

  if (nextId != videoId) {
    playNext(nextId);
  } else {
    while (nextId == videoId) {
      nextId = getRandomInt(0, 4);
    }

    if (!playNext(nextId)) {
      playRandom(e);
    }
  }
});

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function playNext(id) {
  // checks if the video has already been played
  for (var src in videoSudahDimainkan) {
    if (src == videos[id]) {
      return false;
    }
  }

  tagVideo.setAttribute("src", videos[id]);
  tagVideo.play();

  // adds src to arr of played videos
  videoSudahDimainkan.push(videos[id]);

  /*
   * Everything from here on is optional depending on whether you want to
   * - iterate over the arr of videos and play each videos at least once before starting over or
   * - you want to stop playing videos after playing each at least once
   */

  return true;
}
