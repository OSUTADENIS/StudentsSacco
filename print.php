<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/font-awesome/css/all.css">
  <title></title>
</head>
<body>
<!-- <input type="button" value="Print" onclick="printPageArea()"> -->
<button type="button" onClick="printPageArea()" class="btn btn-primary btn-block col-md-2 float-right" id="new_borrower"><i class="fa fa-print"></i> Print</button>

<style type="text/css">
    button {
        width: 100px;
        height: 40px;
        /* background-color: rgb(0,0,250); */
        background-color: rgb(250,150,110);
        color: white;
        font-weight: bold;
        font-size: 15px;
        margin-left: 75%;
    }
    button:hover {
        background-color: rgb(230,130,100);
        /* background-color: rgb(0,0,220); */
    }

</style>

<script type="text/javascript">
function printPageArea(page){
    var printContent = document.getElementById('page');
    var WinPrint = window.open('', '', 'width=650,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
}
</script>
</body>
</html>
