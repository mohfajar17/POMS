<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Collapse;
use miloschuman\highcharts\Highcharts;
use hscstudio\chart\ChartNew;

/* @var $this yii\web\View */
/* @var $model app\models\Atlet */

$this->title = $model->id_atlet;
$this->params['breadcrumbs'][] = ['label' => 'Atlets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atlet-view">
  <h1><?= Html::encode($this->title) ?></h1>
  <p>
    <?= Html::a('Update', ['update', 'id' => $model->id_atlet], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id_atlet], [
      'class' => 'btn btn-danger',
      'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
      ],
    ]) ?>
  </p>

  <?= DetailView::widget([
    'model' => $model,
      'attributes' => [
        'id_atlet',
        'id_psikolog',
        'nama',
        'cabang_olahraga',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kota_asal',
        'no_telefon',
        'email:email',
        // 'password',
        // 'token:ntext',
        // 'photo_profile',
        'intensitas_target',
        // 'label',
        // 'status_verifikasi',
    ],
  ]) ?>


  <?php 

      $xAxis = array();
      $seriesIntensitas = array();
      $seriesTarget = array();
      $seriesFisik = array();
      $seriesMental = array();
      $i = 1;

      $seriesIntensitas['name'] = 'Intensitas';
      $seriesTarget['name'] = 'Target intensitas';
      $seriesFisik['name'] = 'Kondisi fisik';
      $seriesMental['name'] = 'Kondisi mental';

      $seriesIntensitas['type'] = 'line';
      $seriesIntensitas['polar'] = true;
      $seriesTarget['name'] = 'Target intensitas';
      $seriesFisik['name'] = 'Kondisi fisik';
      $seriesMental['name'] = 'Kondisi mental';

      $seriesIntensitas['data'] = array();
      $seriesMental['data'] = array();
      $seriesTarget['data'] = array();
      $seriesFisik['data'] = array();

      
      foreach ($statistik as $key) {
        $xAxis[] = "Sesi $i";
        
        $seriesIntensitas['data'][] =(float) $key['intensitas'];
        $seriesTarget['data'][] = (float)$key['intensitas_target'];
        $seriesFisik['data'][] = (float)$key['scoring_fisik'];
        $seriesMental['data'][] = (float)$key['scoring_mental'];

        $seriesMental['pointPlacement'] = 'on';

        $i++;
      }


      echo Highcharts::widget([
        'options' => [
          'title' => ['text' => 'Statistik'],
          'xAxis' => [
            'categories' => $xAxis
          ],
            'yAxis' => [
              'title' => ['text' => 'Nilai']
            ],
            'series' => [
              $seriesMental,
              $seriesIntensitas,
              $seriesFisik,
              $seriesTarget
            ]
        ]
      ]);

      
      $i=1;
      foreach ($statistik as $key) {
        $xAxis[] = "Sesi $i";
        echo Collapse::widget([
          'items' => [
          // equivalent to the above
            ['label' => "Detail Sesi $i",
              'content' => '<div class="bottom"><div style="float: left; width: 50%;">'.ChartNew::widget(['type'=>'radar',
              'title'=>'Kondisi Mental',
              'labels'=>['Motivasi','Kenyamanan','Stress','Konsentrasi','Keyakinan','Target','Komunikasi','Mental skill'],
              'datasets' => [
                ['title'=>'Kondisi mental','data'=>[$key['antusiasme_pre_latih'],$key['antusiasme_pos_latih'], $key['stres'],$key['konsentrasi'],$key['keyakinan'],$key['target'],$key['komunikasi'],$key['mental_skill']],
                ]
              ],
              ]).'</div><div style="float: left; width: 50%;">'.ChartNew::widget(['type'=>'radar',
                'title'=>'Kondisi Fisik',
                'labels'=>['Fisik','Lelah','Dehidrasi','Tidur','Nutrisi','Recovery'],
                'datasets' => [
                  ['title'=>'Kondisi fisik','data'=>[$key['fisik'],$key['lelah'], $key['hidrasi'],$key['tidur'],$key['nutrisi'],$key['recovery']],
                  ]
                ],
              ]).'</div>
              </div>',
              // open its content by default
              'contentOptions' => ['class' => 'out'],
            ],
          ]
        ]);

        $i++;
      }
  ?>

</div>
