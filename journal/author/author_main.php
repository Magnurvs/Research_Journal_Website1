<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
    <style type="text/css">
        .nav1 {
            background-color: #004C8F;
            text-decoration: none;
            margin-top: 90px;
        }
        
        .nav1 a:hover {
            color: #f1f1f1;
            background-color: #ED232A;
        }
        
        .nav1 a:focus {
            color: #f1f1f1;
            background-color: #ED232A;
        }
        
        #nv {
            color: white;
        }
        
        iframe {
            height: 589px;
            width: 1517px;
            border: solid 2px black;
        }
    </style>
</head>

<body>
    <?php
    $CurrenLogntRoleId = $_REQUEST['CurrenLogntRoleId'];
      echo $CurrenLogntRoleId;

    ?>
    <div class="nav1">
        <nav class="nav">

            <a class="nav-link" id="nv" href="submission.php?CurrenLogntRoleId=<?php echo $CurrenLogntRoleId ?>" target="frame1">File Upload</a>
            <a class="nav-link" id="nv" href="reviewer_by_id.php?CurrenLogntRoleId=<?php echo $CurrenLogntRoleId ?>" target="frame1">Reviewer Details</a>

            <a class="nav-link" id="nv" href="uploadedm.php?CurrenLogntRoleId=<?php echo $CurrenLogntRoleId ?>" target="frame1">Uploaded</a>
            <a class="nav-link" id="nv" href="../Index.html">Log Out</a>

        </nav>
    </div>
    <iframe name="frame1" src="">
	
</iframe>
</body>

</html>