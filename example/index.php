<?php
?>
<html lang="en">
<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <title>Scada Example</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

    <div id="mydiv">
    	<img id="bg">
    </div>

    <script type="text/javascript" src="src/RunAjax.js"></script>
    <script type="text/javascript" src="src/ScadaTags.js"></script>

    <script type="text/javascript" src="scada.js"></script>
    <script type="text/javascript">


    var params = {
    	defaultUrl: "backend.php",

    	// params for getdata().
    	getDataParams: {
    		'method': "getInfo",
    		'data': {
    		}
    	},

    	// html relation:
    	div: '#mydiv',
    	image: {
    	 	id: "bg",
    		src: "images/scada.jpg",
    	},

    	getDataWithDisplay: true,

    	// time for timer routine.
    	time: {
    		getData: 10000,
    		create: 1000 //,
    	}
    }

    var myScada = new scada( params )

    $( document ).ready(function() {
    	myScada.Start();
    });

    </script>
</body>
</html>
