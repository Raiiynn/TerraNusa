<?php

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - TerraNusa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#245B4F',
                        'secondary': '#6A9C89',
                        'tertiary': '#C4DAD2',
                        'background': '#E9EFEC',
                    }
                }
            }
        }
    </script>
    <style>
        .container-custom {
            width: 85%;
            max-width: 1400px;
            margin: 0 auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }
    </style>
</head>
<body class="bg-background">