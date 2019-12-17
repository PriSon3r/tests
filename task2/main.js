var openAlbums = document.querySelector('.album');
   
openAlbums.addEventListener('click', function(e){
    var tergetAlbum = e.target.getAttribute('alt');
    var albumPath = tergetAlbum.replace(/\.[^.]+$/, "");
    document.location.href='/?currentAlbum='+albumPath; 
});