Dropzip.js
=========

This is a javascript library that utilizes PHP and jQuery to create a draggble and droppable area that zips all of the containing files and downloads them from the browser.

CHANGELOG
----------

v 1.1:

- added ability to remove files. To make this work on your server you need to change the filePath variable inside of the javascript file to the path where your downloads are stored.


v 1.0:

original version

ZIPDROP SETUP
-------------

You can set up ZipDrop in just a few easy steps.

1) Make sure your server has ZipArchive support. This comes with the compilation of PHP

2) Upload all files as they are to your host.

3) Edit the image links in index.php to your liking, alway specifying a thumbnail and surround it with an <a> tag that links to the original file.

Example (as seen in the default index.php) :

<div class="thumb_container"><a href="assets/files/downloads/leafs.jpg"><img class="downloadable" src="assets/files/thumbs/leafs.jpg" alt="leafs.jpg" /><br /><span>Leafs</span></a></div>

You can edit this to your liking as such:

<div class="thumb_container"><a href="assets/files/downloads/YOURFILE.exe"><img class="downloadable" src="assets/files/thumbs/YOURTHUMBNAIL.jpg" alt="YOURFILE.exe" /><br /><span>A NAME FOR YOUR FILE</span></a></div>


------------------

Note: Your files don't need to be jpg files as i did in my example. You can use any filetype like .exe .mpg .mp3 ... you name it.



FURTHER CUSTOMISATION NOTES
---------------------------

It's easy:

- your file thumbnails go in the "assets/files/thumbs/" folder

- your downloads go in the "assets/files/downloads/" folder

- The CSS is located in assets/styles

