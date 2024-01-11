<?php
$serverName        = "213.171.204.36";
$connectionOptions = array(
    "Database" => "Nysc",
    "Uid"      => "Bisola_new",
    "PWD"      => "eiu947qwbjgf@#455",
    "TrustServerCertificate"=> 'Yes',
    "Encrypt"=>'Yes',
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
    die(FormatErrors(sqlsrv_errors()));
}
function FormatErrors($errors)
{
    /* Display errors. */
    echo "Error information: ";

    foreach ($errors as $error) {
        echo "SQLSTATE: " . $error['SQLSTATE'] . "";
        echo '<br>';
        echo "Code: " . $error['code'] . "";
        echo '<br>';

        echo "Message: " . $error['message'] . "";
    }
}

?>
