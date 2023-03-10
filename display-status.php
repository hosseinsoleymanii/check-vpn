//you can use this code where you want to display vpn status.
<h1 class="vpn-on" style="color: red;text-align: center;margin: 0;background: #eee;">
<?php include 'vpn-check.php'; if (is_vpn_on()) { echo "وی پی انت روشنه!"; } ?> 
</h1>