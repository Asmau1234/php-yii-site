<?php

/* @var $this yii\web\View */
//use kartik\datetime\DateTimePicker;
use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, asmau, shaheedah,
      meta, tags']);
$this->registerMetaTag(['name' => 'description', 'content' => 'This page is completely for me about me and by me!'], 'description');
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <!-- <?php
      // echo DateTimePicker::widget([
      //    'name' => 'dp_1',
      //    'type' => DateTimePicker::TYPE_INPUT,
      //    'value' => '23-Feb-1982 10:10',
      //    'pluginOptions' => [
      //       'autoclose'=>true,
      //       'format' => 'dd-M-yyyy hh:ii'
         //]
      //]);
   ?> -->

    <p>
        My name is Asma'u Shaheedah. I am a software engineer and i dabble in literature occasionally.  
    </p>
    <p>
    	My tech stack for backend is <code> Scala, previously Java and most recently PHP/Yii. Frontend is the usual javascript/ReactJS (will get to nodeJS one of these days) and for data well, the traditional relational SQL and then for non-relational, MongoDB.</code>
    </p>
    <p>
    	For literature, i am an avid reader and a not-so-successful writer. Once in a while i write on the blog which can be found here <a href="https://notsocietyschild.blogspot.com">
    		Le Blog
    	</a> and for my self published book of peotry, you can find it one Amazon <a href="https://www.amazon.com/Solitude-Asmau-Shaheedah/dp/1500956287">here </a>
    </p>
    <p>
      <b>email:</b> <?= $email ?>
   </p>
   <p>
      <b>phone:</b> <?= $phone ?>
   </p>
	<?= $this->render("_part1") ?>
   	<?= $this->render("_part2") ?>
</div>
