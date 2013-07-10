<?php

function getFileInfo($file)
{
    $filesize = filesize($file);
    $filename = getFileName($file);
    $zipname = 'zips/' . $_POST['rand'];

    if(addToZip($file, $filename, $zipname) == FALSE){
        echo "couldn't add to zip";
    }

    if(($filesize > 1023) && ($filesize <  1048576))
    {
        $filesize = convert_from_bytes( $filesize, 'KB' );
        echo $filename . " - " . $filesize . " kilobytes";
    }

    if(($filesize > 1048575) && ($filesize <  1073741824))
    {
        $filesize = convert_from_bytes( $filesize, 'MB' );
        echo $filename . " - " . $filesize . " megabytes";
    }

    if(($filesize > 1073741823) && ($filesize <  1099511627776))
    {
        $filesize = convert_from_bytes( $filesize, 'GB' );
        echo $filename . " - " . $filesize . " gigabytes";
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $function = $_POST['f'];

    switch($function)
    {
        case "getFileInfo":
            echo getFileInfo($_POST['file']);
            break;
        case "removeFile":
            echo removeFile($_POST['rand'], $_POST['file']);
            break;
    }
}
else
{
    echo "No direct file access allowed";
}



//extra functions

function convert_from_bytes($bytes, $to=NULL)
{
    $float = floatval( $bytes );
    switch( $to )
    {
        case 'GB' :            // Gigabyte
            $float /= 1024;
            $float = number_format($float, 2);
        case 'MB' :            // Megabyte
            $float /= 1024;
            $float = number_format($float, 2);
        case 'KB' :            // Kilobyte
            $float /= 1024;
            $float = number_format($float, 2);
        default :              // byte
    }
    unset( $bytes, $to );
    return( $float );
}


function getFileName($url)
{
    $filearr = preg_split('/\//',$url);
    $name = NULL;
    for($i = 0;$i<count($filearr);$i++)
    {
        $name = $filearr[$i];
    }

    return $name;

}

function addToZip($file, $filename, $zipname)
{
    $zip = new ZipArchive;
    if ($zip->open($zipname . '.zip', ZIPARCHIVE::CREATE) === TRUE)
    {
        $zip->addFile($file , $filename);
        $zip->close();
        return TRUE;
    } else
    {
        return FALSE;
    }
}

function removeFile($zipname, $file) {
    $zip = new ZipArchive;
    $res = $zip->open("zips/" . $zipname . ".zip");
    if($res === TRUE)
    {
        $zip->deleteName(getFileName($file));
        $zip->close();
        return TRUE;
    } else
    {
        return FALSE;
    }
}