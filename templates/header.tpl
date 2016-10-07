<html>
<head>
    <title>{$title="Blog"}</title>
    <meta charset="utf-8" />
    <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/generic/build/generic.css" rel="stylesheet">
    <link href="public/css/frontpage/build/frontpage.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
</head>
<body>
<div id="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">{$title}</a>
            </div>
            <ul class="nav navbar-nav">
                {foreach $navBtn as $navUrl}
                    {strip}
                        <li><a href="{$navUrl.url}">{$navUrl.page}</a></li>
                    {/strip}
                {/foreach}
            </ul>
        </div>
    </nav>
</div>
