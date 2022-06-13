<?php
    $path = 'img/'; //Folder name to storage uploaded images
    $fileName = rand(0,9999999999999) . '.jpg'; //Random file name
    $file = $path . $fileName;
    $url = "https://YOUR_DOMAIN.COM/upload/img/"; #url with your domain, make sure path is correct
    if (move_uploaded_file($_FILES['files']['tmp_name'][0], $file))
    {
        $result = [
            "success" => true,
            "files" => [
                    [
                        "hash" => $fileName,
                        "name" => $fileName,
                        "url" => $url . $fileName,
                        "size" => $_FILES['files']['size'][0]
                    ]
            ],
        ];
        print_r(json_encode($result));
    } else {
        echo "Its not working\n";
    }
?>