<?php
$client_id = '1373343504373387295';
$redirect_uri = urlencode('http://localhost/SianRoleplay/discord_callback.php');
$scope = 'identify';

header('Location: https://discord.com/api/oauth2/authorize?client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . '&response_type=code&scope=' . $scope);
exit;
?>
