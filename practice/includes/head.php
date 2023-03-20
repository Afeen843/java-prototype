<?php
/**
 * Head.php
 */
?>

<html>
<head>
    <title>SOAP API Model:: TEST PROJECT</title>
    <script src="../lib/jquery-3.5.0.js"></script>

    <link rel="stylesheet" href="../css/style.css">


    <script lang="javascript">

        $(document).ready(function (evt) {
            $ = jQuery.noConflict();
            /**
             * Soap Api Model Init
             *
             */
            SoapApiModel._init(
                $,
                '<?php echo DB_HOST;?>',
                '<?php echo DB_USER;?>',
                '<?php echo DB_PASSWORD;?>',
                '<?php echo DB_NAME;?>',
                '<?php echo DB_PORT;?>'
            );

            $('getData').click(function (){

                $.ajax({
                url:'soapAjax.php',
                    data:{functionName: 'searchCustomer' },
                    success:function (response){
                    console.log(response)
                    },
                });
            });

        });

    </script>


</head>
