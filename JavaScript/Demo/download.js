    var tags = document.getElementsByTagName("img");
    for (var i = 0; i < tags.length; i++) {
        window.open('http://localhost/downloadImg.php?file='+encodeURIComponent(tags[i].src));
    }