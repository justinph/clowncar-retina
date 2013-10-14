<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Clowncar SVG Retina Image Test</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
       


        <script src="http://localhost:35729/livereload.js"></script>
        <style type="text/css">
        * {box-sizing: border-box;}
        object{ 
            width: 50%;
            height: auto;
            float: left;
            margin: 0 10px 10px 0;
        }
        html, body{
            min-height: 900px;
        }
        </style>

    </head>
    <body>

<?php

function replace_newline($string) {
    $string = str_replace(array("\r", "\r\n", "\n"), ' ', $string);
    $string = preg_replace('/\s+/', ' ', $string);
    return trim($string);
}


/*
only screen and (-webkit-min-device-pixel-ratio: 2), 
only screen and () 
 */

$clowncar = <<<'EOT'
        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 300 225' preserveAspectRatio='xMidYMid meet'>
            <title>Test Images</title> 
            <style>
            svg{
                background-size: 100% 100%;
                background-repeat: no-repeat;
            }

            @media only screen and (max-width: 300px ) and (-webkit-max-device-pixel-ratio: 1.99),
            only screen and (max-width: 300px ) and (max-resolution: 191dpi){
                svg{
                    background-image:url(/clowncartest/300x225.jpg);
                }
            }

            @media only screen and (min-width: 301px ) and (max-width: 650px ) and (-webkit-max-device-pixel-ratio: 1.99),
            only screen and (min-width: 301px ) and (max-width: 650px ) and (max-resolution: 191dpi) {
                svg{
                    background-image:url(/clowncartest/650x448.jpg);
                }
            }
            @media only screen and (min-width: 651px ) and (-webkit-max-device-pixel-ratio: 1.99), 
            only screen and (min-width: 651px ) and (max-resolution: 191dpi){
                svg{
                    background-image:url(/clowncartest/952x715.jpg);
                }
            }



            @media only screen and (max-width: 300px ) and (-webkit-min-device-pixel-ratio: 2),
            only screen and (max-width: 300px ) and (min-resolution: 192dpi){
                svg{
                    background-image:url(/clowncartest/650x448.jpg);
                }
            }

            @media only screen and (min-width: 301px ) and (max-width: 650px ) and (-webkit-min-device-pixel-ratio: 2),
            only screen and (min-width: 301px ) and (max-width: 650px ) and (min-resolution: 192dpi){
                svg{
                    background-image:url(/clowncartest/952x715.jpg);
                }
            }
            @media only screen and (min-width: 651px ) and (-webkit-min-device-pixel-ratio: 2), 
            only screen and (min-width: 651px ) and (min-resolution: 192dpi){
                svg{
                    background-image:url(/clowncartest/1300x976.jpg);
                }
            }



        </style>
    </svg>
EOT;
?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <object data="data:image/svg+xml,<?php echo rawurlencode(replace_newline($clowncar)); ?>" type="image/svg+xml"></object>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </body>
</html>
