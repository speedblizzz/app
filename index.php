<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
<title>Cooking Home App</title>
</head>
<body >
<div id="main">
    {{msg}}
</div>
</body>
</html>
<script src="js/vue.js"></script>

<script>
    var app = new Vue({
        el: '#main',
        data: {
            msg: 'Hello Vue!'
        }
    })
</script>
