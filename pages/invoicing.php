<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoicing</title>
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
    <button>SAVE</button>
    <button>CHANGE QTY</button>
    <button>PLU</button>
    <button>NEW TRANSACTION</button>
    <button>PRINT PREVIEW</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button>DELETE ITEMS</button>
    <button>EXIT</button>
    </div> <!-- PROTOTYPE BTN_GRP--->

</body>
</html>