<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing</title>

    <link href="/ojt_k3l_pos/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/ojt_k3l_pos/css/bootstrap.min.css">
    <!-- Custom styles for this template-->
    <link href="/ojt_k3l_pos/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/ojt_k3l_pos/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link href="/ojt_k3l_pos/css/fa-css/all.min.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div><button>Generate</button>&nbsp;<input type="text"></div>

    <br>

    <div><button>Project Name</button>&nbsp;<input type="text">&nbsp;&nbsp;PROJECT CODE&nbsp;<input type="text" placeholder="XYZ" disabled></div>

    <br>

    <div> <!-- Prod Code / Qtty / Tot Div -->
    PRODUCT CODE&nbsp;<input type="text">
    &nbsp;QUANTITY&nbsp;<input type="text">
    &nbsp;TOTAL&nbsp;<input type="text" placeholder="0.00" disabled>
    </div> <!-- Prod Code / Qtty / Tot Div -->

    <br>

    <!-- PROTOTYPE TBL--->
    <table style="border: 1px solid black;">
        <tr>
            <th>ProductCode</th>
            <th>ProductName</th>
            <th>Qty</th>
            <th>UnitCost</th>
            <th>SellingPrice</th>
            <th>TOTAL</th>
        </tr>
        <tr>
            <td>XYZ</td>
            <td>9mm MW_Wire</td>
            <td>10</td>
            <td>93.00</td>
            <td>93.00</td>
            <td>930.00</td>
        </tr>
    </table>
    <!-- PROTOTYPE TBL--->

    <br>

    
    <div> <!-- PROTOTYPE BTN_GRP--->

    <button  data-id="SAVE">SAVE</button>
    <button  data-id="CHANGE QTY">CHANGE QTY</button>
    <button  data-id="PLU">PLU</button>
    <button  data-id="NEW TRANSACTION">NEW TRANSACTION</button>
    <button  data-id="PRINT PREVIEW">PRINT PREVIEW</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button  data-id="DELETE ITEMS">DELETE ITEMS</button>
    <button  data-id="EXIT">EXIT</button>

    </div> <!-- PROTOTYPE BTN_GRP--->

    <!-- modal start-->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal_body_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Modal Body-->
            <div class="modal-body" id="modal_body_content">
                <!-- Modal Body Content-->
            </div>
            <!-- Modal Body -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <!-- modal end-->


    <!-- scripts -->
    <!-- Bootstrap core JavaScript-->
    <script src="/ojt_k3l_pos/js/jquery.min.js"></script>
    <script src="/ojt_k3l_pos/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/ojt_k3l_pos/js/sb-admin-2.min.js"></script>
    <script src="/ojt_k3l_pos/js/dataTables.bootstrap4.min.js"></script>

    <!-- Custom script (coded) -->
    <script src="/ojt_k3l_pos/js/invoicing-js.js"></script>
    
</body>
</html>