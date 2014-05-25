<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Viewer/Editor</title>
    <link rel="stylesheet" href="img.css">
    </head>
    <body>
        <div style="float:left" >
            <img src= "img/CCF_0006.jpg" class="center fit" />
        </div>
        <div>
            <div>
                <button onClick="addTextbox();
                        return false;" />Add Line</button>
            </div>
            <div id="list">
                <div id="elemento" >
                    <label> 1</label>
                    <input type="text" name="email1" />
                </div>
            </div>
        </div>
        <script src="js/dynamicTextbox.js" type="text/javascript" ></script> 
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" language="JavaScript">
                    function set_body_height() { // set body height = window height
                        var wh = $(window).height();
                        $('img').height(wh);
                    }
                    function set_body_Width() { // set body height = window height
                        var ww = $(window).width();
                        $('input').width(ww);
                    }
                    $(document).ready(function() {
                        set_body_height();
                        set_body_Width();
                        $(window).bind('resize', function() {
                            set_body_height();
                            set_body_Width();
                        });
                    });
        </script>
    </body>
</html>
