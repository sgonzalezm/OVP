<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilos_reproductor.css">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <title>Reproduccion</title>
</head>
<body>
<video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="1024"
    height="576"
    poster="ASSETS/Poster/bigbuckbunny.jpg"
    data-setup="{}"
  >
    <source src="ASSETS/Video/big-buck-bunny-sample-video.mp4" type="video/mp4" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>
  <script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
</body>
</html>