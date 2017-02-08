<?php

namespace gentelella\assets;

class GentelellaAsset extends \yii\web\AssetBundle
{
  // public $sourcePath = '@gentelella/dist';
  
  public $depends = [
      'gentelella\assets\ThemeAsset',
      'gentelella\assets\ExtensionAsset',
  ];
}
