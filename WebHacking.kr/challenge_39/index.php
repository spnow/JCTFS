<?php

$pw="????";

if ($_POST[id]) {
    $_POST[id]=str_replace("\\", "", $_POST[id]);
    $_POST[id]=str_replace("'", "''", $_POST[id]);
    $_POST[id]=substr($_POST[id], 0, 15);
    // 如果第15位是`'`，替换后第15, 16位都是`'`，但是这里截取了前15位，故get
    $q=mysql_fetch_array(mysql_query("select 'good' from zmail_member where id='$_POST[id]"));

    if ($q[0]=="good") {
        @solve();
    }
}

?>
