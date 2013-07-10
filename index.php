<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>ZipDrop | Drag, Drop, Zip, Download!</title>

        <script type="text/javascript" src="assets/scripts/jquery.js" ></script>
        <script type="text/javascript" src="assets/scripts/jqueryui.js" ></script>
        <script type="text/javascript" src="assets/scripts/zipdrop.js" ></script>

        <link rel="stylesheet" href="assets/styles/main.css" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <div id="downloadable_files">
                <h1>Files</h1>
                <p>Grab a file and drag it to the <em>downloads</em> area</p>
                <div id="thumbs">
                    <div id="1" class="thumb_container"><a href="assets/files/downloads/leafs.jpg"><img class="downloadable" src="assets/files/thumbs/leafs.jpg" alt="leafs.jpg" /><br /><span>Leafs</span></a></div>
                    <div id="2" class="thumb_container"><a href="assets/files/downloads/road.jpg"><img class="downloadable" src="assets/files/thumbs/road.jpg" alt="road.jpg" /><br /><span>Road</span></a></div>
                    <div id="3" class="thumb_container"><a href="assets/files/downloads/mountains.jpg"><img class="downloadable" src="assets/files/thumbs/mountains.jpg" alt="mountains.jpg" /><br /><span>Mountains</span></a></div>
                    <div id="4" class="thumb_container"><a href="assets/files/downloads/playtime.jpg"><img class="downloadable" src="assets/files/thumbs/playtime.jpg" alt="playtime.jpg" /><br /><span>Playtime</span></a></div>
                    <div id="5" class="thumb_container"><a href="assets/files/downloads/tree.jpg"><img class="downloadable" src="assets/files/thumbs/tree.jpg" alt="tree.jpg" /><br /><span>Tree</span></a></div>
                </div>
            </div>
            <div id="download_list">
                <h1>Downloads</h1>
                <div id="info"></div>
                <h4 id="file_title"></h4>
                <ul id="file_ul">

                </ul>
                <a id="zipdrop_download" style="display:none" href="#">Download</a>
            </div>
            <br style="clear:both;" />
        </div>
    </body>
</html>