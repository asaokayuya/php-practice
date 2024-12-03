<?php
// Q1 tic-tac問題
for ($i=1; $i<=100; $i++){
  switch ($i){
    case ($i % 4 == 0 && $i % 5 == 0):
      echo "tic-tac\n";
      break;
    case ($i % 4 == 0):
      echo "tic\n";
      break;
    case ($i % 5 == 0):
      echo "tac\n";
      break;
    default :
      echo "$i\n";
      break;
  }
}

// Q2 多次元連想配列
//問題1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
echo $personalInfos[1]['name'].'の電話番号は'.['tel'].'です。';
echo $personalInfos[1]['tel'].'です。';

//問題2
foreach ($personalInfos as $key => $person) {
  $key++;
  echo $key.'番目の'.($person['name']).'のメールアドレスは'.($person['mail']).'で、電話番号は'.($person['tel']).'です。'."\n";
}

//問題3
$ageList = [25,30,18];
foreach ($personalInfos as $key => &$person) {
  $person['age'] = $ageList[$key];
}
unset($person);
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId ;
    public $studentName ;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
      echo '授業に出席しました。';
    }
}

$yasuda = new Student('10', '安田');

echo '学籍番号'. $yasuda->studentId .'番の生徒は'. $yasuda->studentName .'です。';

// Q4 オブジェクト-2
class Student
{
    public $studentId ;
    public $studentName ;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($attend_sub)
    {
      echo $this->studentName.'は'.$attend_sub.'の授業に参加しました。学籍番号：'.$this->studentId;
    }
}

$yasuda = new Student('10', '安田');
$yasuda->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new Datetime('2024-11-21');
$date->sub(new DateInterval('P0Y1M0D'));
echo $date->format('Y-m-d');

//問題2
$time1 = new DateTime('2024-11-21');
$time2 = new DateTime('1992-04-25');

$diff = $time1->diff($time2);
echo $diff->format('あの日から%a日経過しました。');

?>