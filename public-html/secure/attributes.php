<html>
<head>
</head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
</style>
<body>
<h1>OIDC - Attribute Display</h1>
<a href="../public/attributes.php"><b>Access the unprotected page</b></a> <br/><br/>

<table>
  <tr>
    <th>Variable</th>
    <th>Value</th>
  </tr>

<?php error_reporting(0);

$list = [
  'REMOTE_USER',
  'OIDC_CLAIM_sub',
  'OIDC_CLAIM_idp_name',
  'OIDC_CLAIM_eppn',
  'OIDC_CLAIM_cert_subject_dn',
  'OIDC_CLAIM_eptid',
  'OIDC_CLAIM_iss',
  'OIDC_CLAIM_given_name',
  'OIDC_CLAIM_acr',
  'OIDC_CLAIM_aud',
  'OIDC_CLAIM_idp',
  'OIDC_CLAIM_affiliation',
  'OIDC_CLAIM_name',
  'OIDC_CLAIM_family_name',
  'OIDC_CLAIM_email',
  'OIDC_CLAIM_jti',
  'OIDC_CLAIM_nonce',
  'OIDC_CLAIM_auth_time',
  'OIDC_CLAIM_exp',
  'OIDC_access_token',
  'OIDC_access_token_expires',
  'HTTPS',
  'SSL_TLS_SNI',
  'OIDC_CLAIM_isMemberOf',

];

// Prints the above headers with their values.
// Prints a Warning: Undefined array key error
 print "<tr>";
 foreach ($list as $item) {
   print "<td>".$item."</td><td>";
   if ( is_null($_SERVER[$item]) ) {
     print "<strong style=color:red;>no value</strong>";
   } else {
      print $_SERVER[$item];
   }
   print "</td></tr>";
 }

?>

</table>
<!-- Prints all info -->
<?php
 phpinfo(INFO_VARIABLES);
?>

</body>
</html>
