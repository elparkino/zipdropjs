var filePath = "assets/files/downloads/";

var rand = Math.floor(Math.random()*9999999999);
var link;

$(document).ready(function(){

    $( ".downloadable" ).bind( "dragstart", function(event, ui) {
        link = ui.helper.parent().attr('href');
        //ui.helper.parent().removeAttr('href');
    });

    $('.downloadable').draggable({
        revert:true,
        helper:'clone',
        opacity: 0.5
    });

    $('#download_list').droppable({
        activeClass: 'dropActive',
        drop: function(event,ui){

            var ind = ui.draggable.parent().parent().attr('id');
    	
            event.stopPropagation();

            ui.helper.hide();
    	
            $.ajax({
                url: "zipdrop_functions.php",
                type: "POST",
                dataType: "html",
                data: "f=getFileInfo&file=" +link + "&rand=" + rand,
                success: function(html) {
                    ui.draggable.parent().parent().fadeOut('slow');
                    ui.draggable.removeAttr('class');
                    $('#file_ul').append('<li class="zipped" id="'+ ind +'">' + html + '</li>');
                    $('#zipdrop_download').show();
                    $('#zipdrop_download').attr('href', 'zips/' + rand + '.zip');
                    $('#file_title').html('The following files will be in the ZIP:');

                }
            });
        }
    });

    $('.zipped').live('click',function(){
        var deleted = $(this);
        var file;
        var temp = deleted.html();

        temp = temp.split(" - ");
        file = temp[0];

        var ind = deleted.attr('id');

        $.ajax({
            url: "zipdrop_functions.php",
            type: "POST",
            dataType: "html",
            data: "f=removeFile&file=" +file + "&rand=" + rand,
            success: function(html) {
                if(parseFloat(html)){
                    deleted.remove();

                    $('#' + ind).fadeIn('slow',function(){
                        $(this).find('img').attr('class', 'downloadable ui-draggable');
                        $(this).find('a').attr('href', filePath + file);
                    });

                }
            }
        });
    })
});