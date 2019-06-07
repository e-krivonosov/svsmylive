<form name='text' action=" " method="post"
<label>Имя</label>
<input type="text" name="name" placeholder='имя'/><br/>
<label>Почта</label>
<input type="text" name="mail" placeholder='mail'/>
<label>Дата</label>
<input type="data" name="data"/>
<label>Кол-во рук</label>
<input type="text" name="count_of_hands"/>


<label>Сообщение: </label>
<textarea name="message" rows="10" cols="40" placeholder='massage'></textarea>
<input type='submit' name='done' value='готово'/>

<?php
global $_variable;

$_array = [
    'петя' => [
        'нурдин' => 222
    ],
    'коля' => [
        'пеят' >= 123
    ]

];
foreach ($_array as $key => $value) {
    echo 'Ваш массив ' . ' ' . $key . '</br>';

}

$data = new DateTime($_POST
['data']);
$data->format('Y-m-d H:i:s');


class Giveinfo
{
    protected $name;
    protected $mail;
    protected $data;
    protected $count_of_hands;
    protected $message;


    public function li()
    {

        $this->name = $_POST['name'];
        $this->mail = $_POST['mail'];
        $this->data = new DateTime($_POST['data']);
        $this->count_of_hands = $_POST['count_of_hands'];
        $this->message = $_POST['message'];

    }

    public function printinfo()
    {

        echo $this->name;
        echo $this->mail;
        echo $this->data->format('Y-m-d H:i:s');
        echo $this->count_of_hands;
        echo $this->message;

    }
}

$example = new Giveinfo();
$example->li(); ?></br>
<?php
$example->printinfo(); ?></br>

?>

<a href="https://academy.1c-bitrix.ru/certification/exams.phpp" target="_blank" style="color: #00680c;">tru</a>
<img src="https://im0-tub-ru.yandex.net/i?id=f0e73ddb9a09b92b4c8b105c36db05b1&n=13">

