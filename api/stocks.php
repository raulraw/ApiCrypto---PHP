<?php

$url = 'https://api.binance.com/api/v3/ticker/price';

$data = file_get_contents($url);

$json=json_decode($data,true);

$btc = '';
$eth = '';
$egld = '';
$vet = '';

foreach($json as $k => $v){

  if($v['symbol'] == 'BTCUSDT'){
    $btc = $v['price'];
  }elseif ($v['symbol'] == 'ETHUSDT'){
    $eth = $v['price'];
  }elseif ($v['symbol'] == 'EGLDUSDT'){
    $egld = $v['price'];
  }elseif ($v['symbol'] == 'VETUSDT'){
    $vet = $v['price'];
  }
}

echo 'Pretul BTC astazi este $'.$btc.'<br>';
echo 'Pretul ETH astazi este $'.$eth.'<br>';
echo 'Pretul EGLD astazi este $'.$egld.'<br>';
echo 'Pretul VET astazi este $'.$vet.'<br>';

?>
