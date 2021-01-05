<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <!-- <style>
        h1 {
            font-size: 48pt;
            margin: 0px 0px 10px 0px;
            padding: 0px 20px;
            color: white;
            background: linear-gradient(to right, #aaa, #fff);
        }

        p {
            font-size: 14pt;
            color: #666;
        }
    </style> -->
</head>

<body>
    <p>This is sample content.</p>
    <p>これは、Helloレイアウトを利用したサンプルです。</p>
</body>

<table>
    <?= $this->Html->tableHeaders(
        ["title", 'name', 'mail'],
        ['style' => ['background:#006; color:white']]
    ) ?>
    <?= $this->Html->tableCells(
        [
            ["this is sample", "taro", "taro@yamada"],
            ["Hello!", "hanako", "hanako@gmail.com"],
            ["test, test.", "sachiko", "sachiko@gmail.com"],
            ["last", "jiro", "jiro@gmail.com"],
        ],
        ['style' => ['background:#ccf']],
        ['style' => ['background:#dff']]
    ) ?>
</table>

<ul>
    <?= $this->Html->nestedList(
        ['first line', 'second line' => ['one', 'two', 'three'], 'third line' => ['one', 'two', 'three']]
    ) ?>
</ul>

<!-- <?= $this->Url->build(['controller' => 'hello', 'action' => 'show', '?' => ['id' => 'taro', 'password' => 'yamada123']]) ?>
<br>

<?= $this->Url->build(['controller' => 'hello', 'action' => 'show', '_ext' => 'png', 'sample']) ?>
<br>

<?= $this->Text->autoLinkUrls('http://google.com') ?>
<br>

<?= $this->Text->autoLinkEmails('maejima@gmail.com') ?>
<br>

<?= $this->Text->autoParagraph("one\ntwo\nthree") ?> -->

<p>金額は、<?= $this->Number->currency(1234567, 'JPY') ?>です。</p>
<br>
<p>2桁で表すと、<?= $this->Number->precision(1234.56789, 2) ?>です。</p>
<br>
<p>割合は、<?= $this->Number->toPercentage(0.12345, 2, ['multiply'=>true]) ?>です。</p>

</html>
