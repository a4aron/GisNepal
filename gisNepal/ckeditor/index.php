<?php
    if(isset($_POST['btnPost']))
    {

        $title = isset($_POST['newsTitle']) ? $_POST['newsTitle'] : '';
        $description = isset($_POST['newsDetail']) ? $_POST['newsDetail'] : '';
        echo $title."<br/>";
	
        echo "<>".$description."</>;

    }
?>
<html>
<head>
    <title>Ck editor demo</title>
    <script type="text/javascript" src = "ckeditor.js"> </script>
</head>
<body>
    <form method ="post">
        <p>
            <label>News Title</label>
            <input type = "text" name="newsTitle" value="">

        </p>
        <p>
            <label>News Detail</label>
            <textarea id = "newsDetail" name="newsDetail" value=""></textarea>
            <script type="text/javascript">
                CKEDITOR.replace('newsDetail');
            </script>


        </p>
        <p>
            <button type="submit" value="Post" name="btnPost">POST</button>
            </p>
        </p>
    </form>
</body>
</html>