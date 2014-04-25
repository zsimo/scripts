<html>

<head>

</head>

<body>

<?php


print_r(mktime()+86400);
print_r('<br><br><br>');

session_start();
if (!isset($_SESSION['gio'])) {
	$_SESSION['gio'] = 0;
}
$_SESSION['gio']++;
// increment a session counter

$_SESSION['counter']++;

print_r(session_id());
session_destroy();




// print value

echo "You have viewed this page " . $_SESSION['gio'] . " times";

/* if form has not yet been submitted, display input box */

if (!isset($_POST['file'])) {

?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    Enter file path <input type="text" name="file" />

    </form>

<?php

}

// else process form input

else {

    echo 'File name: <b>'.$_POST['file']  .'</b><br />';

    /* check if file exists and display appropriate message */

    if (file_exists($_POST['file'])) {

        // print file size

        echo 'File size: '.filesize($_POST['file']).' bytes<br />';

        // print file owner

        echo 'File owner: '.fileowner($_POST['file']).'<br />';

        // print file group

        echo 'File group: '.filegroup($_POST['file']).'<br />';

        // print file permissions

        echo 'File permissions: '.fileperms($_POST['file']).'<br />';

        // print file type

        echo 'File type: '.filetype($_POST['file']).'<br />';

        // print file last access time

        echo 'File last accessed on: '.date('Y-m-d', fileatime($_POST['file'])).'<br />';

        // print file last modification time

        echo 'File last modified on: '.date('Y-m-d', filemtime($_POST['file'])).'<br />';

        // is it a directory?

        if (is_dir($_POST['file'])) {

            echo 'File is a directory <br />';

        }

        // is it a file?

        if (is_file($_POST['file'])) {

            echo 'File is a regular file <br />';

        }

        // is it a link?

        if (is_link($_POST['file'])) {

            echo 'File is a symbolic link <br />';

        }

        // is it executable?

        if (is_executable($_POST['file'])) {

            echo 'File is executable <br />';

        }

        // is it readable?

        if (is_readable($_POST['file'])) {

            echo 'File is readable <br />';

        }

        // is it writable?

        if (is_writable($_POST['file'])) {

            echo 'File is writable <br />';

        }

    }

    else {

        echo 'File does not exist! <br />';

    }

}

?>

</body>
</html>