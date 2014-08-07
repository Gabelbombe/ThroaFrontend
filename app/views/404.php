<!DOCTYPE html>

<html lang="en">

<head>
    <title>404 | Filson</title>
    <link type="text/css" rel="stylesheet" media="all" href="/404/css/plax.css" />
</head>
<body>

<div id="parallax">
    <div id="sky"><img src="/404/img/bg_moon.gif" /></div>
    <div id="mountains"></div>
    <div id="trees"></div>
    <div id="rabbit">
    </div>
    <div id="hill"></div>
    <div id="sign"></div>
    <div id="content">
        <div id="content404">
            <a href="http://www.filson.com" class="logo" title="Filson: Since 1897">
                <img id='logo' src="/404/img/filson-logo.png" alt="Filson: Since 1897" />
            </a>
            <h2>Whoops!</h2>
            <p style="color: #fff;">You seem to have stumbled off the beaten path.<br />
                Perhaps you should head <a href="http://www.filson.com">home</a>?</p>
            <p><a href="javascript:history.back();" class="back">Or try heading back?</a></p>
        </div>
    </div>
</div>

<script src="/404/js/jq.min.js"></script>
<script src="/404/js/plax.js"></script>
<script type="text/javascript">

    jQuery(document).ready(function(){
        $('#sky').plaxify({"xRange":10,"yRange":0})
        $('#mountains').plaxify({"xRange":25,"yRange":2})
        $('#trees').plaxify({"xRange":40,"yRange":8})
        $('#rabbit').plaxify({"xRange":55,"yRange":14})
        $('#hill').plaxify({"xRange":90,"yRange":40})
        $('#sign').plaxify({"xRange":185,"yRange":80})
        $('#content').plaxify({"xRange":55,"yRange":14})
        $.plax.enable();
    });
</script>
</body>
</html>