
<?= \navatech\cropper\widgets\Cropper::widget([
	'model' => $model,
	'attribute' => 'picture',
	'options' => [
		'height' => 200,
		'width' => 200,
	],
	'pluginOptions' => [
		//see https://github.com/fengyuanchen/cropper for more information.
    ]
]); ?>