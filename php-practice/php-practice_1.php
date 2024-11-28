<?php
// Q1 変数と文字列
$name = '「浅岡」';
echo '私の名前は'."$name".'です。';

// Q2 四則演算
$num = 5*4;
echo $num."\n";
echo $num/2;

// Q3 日付操作
if(strcmp( date_default_timezone_get(), 'Asia/Tokyo' )) {
    date_default_timezone_set('Asia/Tokyo');
}
echo '現在時刻は、'.date("Y年m月d日 H時i分s秒").'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows') {
    echo '使用OSは、windowsです。';
}  if ($device === 'mac') {
    echo '使用OSは、macです。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18)? '成人です。' :'未成年です。' ;

echo $message;

// Q6 配列
$prefecture = ['東京都',  '神奈川県', '茨城県', '栃木県', '千葉県', '群馬県', '埼玉県'];
echo "$prefecture[3]と$prefecture[4]は関東地方の都道府県です。";

// Q7 連想配列-1
$prefecture = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach($prefecture as $prefecture_detail => $city) {
    echo $city."\n";
}

// Q8 連想配列-2
$prefecture = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];

foreach($prefecture as $prefecture_detail => $city) {
    if($prefecture_detail === '埼玉県' && $city === 'さいたま市') {
        echo "$prefecture_detail". 'の県庁所在地は、'."$city".'です。';
    }
}

// Q9 連想配列-3
$prefecture = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
];
$prefecture['愛知県'] = '名古屋市';
$prefecture['大阪府'] = '大阪市';
$prefecture_different = ['愛知県','大阪府'];

foreach($prefecture as $prefecture_detail => $city) {
    if(in_array($prefecture,$prefecture_different)) {
        echo "$prefecture_different" . "は関東地方ではありません。\n";
    }
    else{
        echo"$prefecture_detail".'の県庁所在地は'."$city"."です。\n";
    }
}

// Q10 関数-1
function hello($name)
{
    echo "$name"."さん、こんにちは。\n";
}

hello('金谷');
hello('安藤');

// Q11 関数-2
function calcTaxInPrice($price)
{
    $taxinprice = $price*1.1;
    return $taxinprice;
}

$price = 1000;
echo $price.'の商品の税込価格は'. calcTaxInPrice($price) .'円です。';

// Q12 関数とif文
function distinguishNum ($number) {
    if ($number % 2 == 0) {
        return "$number は偶数です。\n";
    } else {
        return "$number は奇数です。\n";
    }
}

echo distinguishNum (1);
echo distinguishNum (2);

// Q13 関数とswitch文
function evaluateGrade($grade){
    switch($grade){
        case "A":
        case "B":
            return "合格です。\n";
        case "C":
            return "合格ですが追加課題があります。\n";
        case "D":
            return "不合格です。\n";
        default :
            return "判定不明です。講師に問い合わせてください\n";
    }
}
echo evaluateGrade("A");
echo evaluateGrade("C");

?>