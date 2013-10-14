<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Clowncar SVG Retina Image Test</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <style type="text/css">
        object{ 
            width: 50%;
            height: auto;
            float: left;
            margin: 0 10px 10px 0;
        }
        </style>

    </head>
    <body>

<?php
// heler to trim whitespace and strings
function replace_newline($string) {
    $string = str_replace(array("\r", "\r\n", "\n"), ' ', $string);
    $string = preg_replace('/\s+/', ' ', $string);
    return trim($string);
}

// the svg, outputting as php code so it's more readable in source
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
                    background-image:url(https://raw.github.com/justinph/clowncar-retina/master/300x225.jpg);
                }
            }

            @media only screen and (min-width: 301px ) and (max-width: 650px ) and (-webkit-max-device-pixel-ratio: 1.99),
            only screen and (min-width: 301px ) and (max-width: 650px ) and (max-resolution: 191dpi) {
                svg{
                    background-image:url(https://raw.github.com/justinph/clowncar-retina/master/650x448.jpg);
                }
            }
            @media only screen and (min-width: 651px ) and (-webkit-max-device-pixel-ratio: 1.99), 
            only screen and (min-width: 651px ) and (max-resolution: 191dpi){
                svg{
                    background-image:url(https://raw.github.com/justinph/clowncar-retina/master/952x715.jpg);
                }
            }



            @media only screen and (max-width: 300px ) and (-webkit-min-device-pixel-ratio: 2),
            only screen and (max-width: 300px ) and (min-resolution: 192dpi){
                svg{
                    background-image:url(https://raw.github.com/justinph/clowncar-retina/master/650x448.jpg);
                }
            }

            @media only screen and (min-width: 301px ) and (max-width: 650px ) and (-webkit-min-device-pixel-ratio: 2),
            only screen and (min-width: 301px ) and (max-width: 650px ) and (min-resolution: 192dpi){
                svg{
                    background-image:url(https://raw.github.com/justinph/clowncar-retina/master/952x715.jpg);
                }
            }
            @media only screen and (min-width: 651px ) and (-webkit-min-device-pixel-ratio: 2), 
            only screen and (min-width: 651px ) and (min-resolution: 192dpi){
                svg{
                    background-image:url(https://raw.github.com/justinph/clowncar-retina/master/1300x976.jpg);
                }
            }



        </style>
    </svg>
EOT;
?>

<h1>Clowncar Images demo, wtih "retina" image support</h1>

<p>This technique builds upon that documented <a href="http://coding.smashingmagazine.com/2013/06/02/clown-car-technique-solving-for-adaptive-images-in-responsive-web-design/">here</a>. <a href="https://github.com/justinph/clowncar-retina">Github repo</a></p> 


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<object data="data:image/svg+xml,<?php echo rawurlencode(replace_newline($clowncar)); ?>" type="image/svg+xml"></object>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </body>
</html>
