<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
    <script type="text/javascript">
        function validate() {
            var a = document.f1.title.value;
            if (a == null || a == "") {
                document.getElementById("et").innerHTML = "<font color=red>Please Enter Title</font>";
                return false;
            }
            if (!isNaN(a)) {
                document.getElementById("et").innerHTML = "<font color=red>Title Cannot Be Number</font>";
                return false;
            }
            var b = document.f1.key.value;
            if (b == null || b == "") {
                document.getElementById("kk").innerHTML = "<font color=red>Please Enter Keyword</font>";
                return false;
            }
            if (!isNaN(b)) {
                document.getElementById("kk").innerHTML = "<font color=red>Keyword Cannot Be Number</font>";
                return false;
            }
            var c = document.f1.name.value;
            if (c == null || c == "") {
                document.getElementById("nm").innerHTML = "<font color=red>Please Enter Name</font>";
                return false;
            }

            if (!isNaN(c)) {
                document.getElementById("et").innerHTML = "<font color=red>Name Cannot Be Number</font>";
                return false;
            }
            var d = document.f1.add.value;
            if (d == null || d == "") {
                document.getElementById("ad").innerHTML = "<font color=red>Please Enter Address</font>";
                return false;
            }
            var e = document.f1.mail.value;
            if (e == null || e == "") {
                document.getElementById("em").innerHTML = "<font color=red>Please Enter Email</font>";
                return false;
            }
            var c = document.f1.file.value;
            if (c == null || c == "") {
                document.getElementById("file").innerHTML = "<font color=red>Please Select File</font>";
                return false;
            }
            return true;
        }
    </script>
    <style type="text/css">
        h3 {
            margin-left: 200px;
        }
    </style>
</head>

<body>
<?php 
    $CurrenLogntRoleId = $_REQUEST['CurrenLogntRoleId'];
    echo $CurrenLogntRoleId;
  ?>
    <div class="container">
        <h3><b><u>Upload File</u></b></h3>
        <form action="fileupload.php" method="POST" name="f1" onsubmit="return validate()" enctype="multipart/form-data">
            <br>
            <div class="row">
                <div class="col-lg-3">
                    <label>Select Subject</label><br>
                </div>
                <div class="col-lg-3">
                    <select class="form-control" name="selects" required>
				<option value="">Select Subject</option>
				<option value="agricultural Science" >agricultural Science</option>
				<option value="Biological Science" >Biological Science</option>
				<option value="Chemical Sciences">Chemical Sciences</option>
				<option valud="Computer Sciences">Computer Sciences</option>
				<option value="Energy">Energy</option>
				<option value="Enironment and Geological Sciences">Enironment and Geological Sciences</option>
				<option value="Materials Sciences">Materials Sciences</option>
				<option value="Mathamatical Sciences">Mathamatical Sciences</option>
				<option value="medical Sciences">medical Sciences</option>
				<option value="Multidisciplinary">Multidisciplinary</option>
				<option value="Physics and Astronomy">Physics and Astronomy</option>
				<option value="Social Sciences Economics & Management">Social Sciences Economics & Management</option>
			</select><span id="select"></span><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label>Enter Title</label>
                </div>
                <div class="col-lg-3">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                    <span id="et"></span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3">
                    <label>Artical Type</label>
                </div>
                <div class="col-lg-3">
                    <select class="form-control" name="atype" required>
					<option value="">Select Artical Type</option>
					<option value="Conference Abstract">Conference Abstract</option>
					<option value="Review Artical">Review Artical</option>
					<option value="Original Reaserach Article">Original Reaserach Article</option>
					<option value="Minireview Artical">Minireview Artical</option>
					<option value="Policily Article">Policily Article</option>
					<option value="Short Communication">Short Communication</option>
					<option value="Commentary">Commentary</option>
					<option value="Opinion Article">Opinion Article</option>
					<option value="Short Reserach Article">Short Reserach Article</option>
					<option value="Study Protocols">Study Protocols</option>
					<option value="Pre-protocols">Pre-protocols</option>
					<option value="Method Article">Method Article</option>
					<option value="Data Article">Data Article</option>
					<option value="Case Study">Case Study</option>
					<option value="Original Reaserach Article - Special Issue">Original Reaserach Article - Special Issue  </option>
					<option value="Review Article : Special Issue">Review Article : Special Issue</option>
					<option value="Case Study : Special Issue">Case Study : Special Issue</option>
					<option value="Editorial">Editorial</option>
					<option value="Original Reserach Article - (Regular Section)">Original Reserach Article - (Regular Section)</option>
					<option value="Editorial Special Issue">Editorial Special Issue</option>
					<option value="Conference Proceeding(fullpaper)">Conference Proceeding(fullpaper)</option>
					<option value="Grey Literature">Grey Literature</option>
					<option value="Others">Others</option>
					</select><span id="ss"></span>
                </div>
            </div><br>
            <div class="row">
                <!--<div class="col-lg-3">
				<label>Enter Abstratct</label>
			</div>
			<div class="col-lg-3">
				<textarea rows="5" class="form-control" placeholder="Abstratct" name="txtarea"></textarea>
			<span id="et"></span>
			</div>-->
            </div><br>
            <div class="row">
                <div class="col-lg-3">
                    <label>Enter Keywords</label>
                </div>
                <div class="col-lg-3">
                    <input type="text" name="key" class="form-control" placeholder="Keywords">
                    <span id="kk"></span>
                </div>
            </div><br>

            <div class="row">
                <div class="col-lg-3">
                    <label>Name</label>
                </div>
                <div class="col-lg-3">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    <span id="nm"></span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3">
                    <label>Address & Afillation</label>
                </div>
                <div class="col-lg-3">
                    <input type="text" name="add" class="form-control" placeholder="Address & Afillation">
                    <span id="ad"></span>
                </div>
            </div><br>
            <div class="row">
                <div class="col-lg-3">
                    <label>Email Id</label>
                </div>
                <div class="col-lg-3">
                    <input type="email" name="mail" class="form-control" placeholder="Email Id">
                    <span id="em"></span>
                </div>
            </div><br>
            <!--<div class="row">
			<div class="col-lg-3">
				<label>Is Emergency Proceesing  Required?</label>
			</div>
			<div class="col-lg-3">
				<input type="text" name="isem" class="form-control"  placeholder="Is Emergency Process">
			<span id="et"></span>
			</div>
			</div><br>
			<div class="row">
			<div class="col-lg-3">
				<label>Is Emergency Proceesing Required, please write the date</label>
			</div>
			<div class="col-lg-3">
				<input type="date" name="txtd" class="form-control"  placeholder="Date">
			<span id="et"></span>
			</div>
			</div><br>-->
            <div class="row">
                <div class="col-lg-3">
                    <label>Upload journal</label>
                </div>
                <div class="col-lg-3">
                    <input type="file" name="file" class="form-control" placeholder="Choose File">
                    <span id="file"><?php echo $CurrenLogntRoleId ?> </span>
                    
                </div>
                <input type="hidden" name="auth_id" value="<?php print $CurrenLogntRoleId; ?>"/>
            </div><br>
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3">
                    <input type="submit" class="form-control btn-primary" name="uploadfile">

                </div>
            </div>
            <input type="hidden" name="field_name" value="<?php $Cur; ?>" />
        </form>

    </div>






</body>

</html>