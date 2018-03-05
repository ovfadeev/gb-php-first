<?php
function findImages($scanDirImages, $viewDirImages) {
  $result = array();
  $cdir = scandir($scanDirImages);
  foreach ($cdir as $key => $value):
    if (!in_array($value,array(".", ".."))){
      $tmpFile = $scanDirImages . "/" . $value;
      if (is_dir($tmpFile)){
        $result = array_merge($result, findImages($tmpFile));
      } else if (exif_imagetype($tmpFile)) {
        $result[] = array(
          "FILE_NAME" => $value,
          "FILE_PATH" => $tmpFile,
          "FILE_PATH_BROWSE" => $viewDirImages . $value
        );
      }
    }
  endforeach;
  return $result;
}

function create_thumbnail($path, $save, $width, $height) {
  $info = getimagesize($path); //получаем размеры картинки и ее тип
  $size = array($info[0], $info[1]); //закидываем размеры в массив
  //В зависимости от расширения картинки вызываем соответствующую функцию
  if ($info['mime'] == 'image/png') {
    $src = imagecreatefrompng($path); //создаём новое изображение из файла
  } else if ($info['mime'] == 'image/jpeg') {
    $src = imagecreatefromjpeg($path);
  } else if ($info['mime'] == 'image/gif') {
    $src = imagecreatefromgif($path);
  } else {
    return false;
  }

  $thumb = imagecreatetruecolor($width, $height); //возвращает идентификатор изображения, представляющий черное изображение заданного размера
  $src_aspect = $size[0] / $size[1]; //отношение ширины к высоте исходника
  $thumb_aspect = $width / $height; //отношение ширины к высоте аватарки

  if($src_aspect < $thumb_aspect) {     //узкий вариант (фиксированная ширина)    $scale = $width / $size[0];     $new_size = array($width, $width / $src_aspect);    $src_pos = array(0, ($size[1] * $scale - $height) / $scale / 2); //Ищем расстояние по высоте от края картинки до начала картины после обрезки   } else if ($src_aspect > $thumb_aspect) {
    //широкий вариант (фиксированная высота)
    $scale = $height / $size[1];
    $new_size = array($height * $src_aspect, $height);
    $src_pos = array(($size[0] * $scale - $width) / $scale / 2, 0); //Ищем расстояние по ширине от края картинки до начала картины после обрезки
  } else {
    //другое
    $new_size = array($width, $height);
    $src_pos = array(0,0);
  }

  $new_size[0] = max($new_size[0], 1);
  $new_size[1] = max($new_size[1], 1);

  imagecopyresampled($thumb, $src, 0, 0, $src_pos[0], $src_pos[1], $new_size[0], $new_size[1], $size[0], $size[1]);
  //Копирование и изменение размера изображения с ресемплированием

  if($save === false) {
    return imagepng($thumb); //Выводит JPEG/PNG/GIF изображение
  } else {
    return imagepng($thumb, $save);//Сохраняет JPEG/PNG/GIF изображение
  }

}

function bildArrayImagesGallery($arParams){
  // поиск всех картинок
  $arImages = findImages($arParams["SCAN_DIR"], $arParams["FILE_PATH_VIEW"]);
  foreach ($arImages as $key => $image):
    $path = $image["FILE_PATH"];
    $pathSave = $arParams["PATH_RESIZE"] . "/" . $image["FILE_NAME"];
    // делаем превью картинки
    if (is_file($pathSave) || create_thumbnail($path, $pathSave, $arParams["RESIZE_WIDTH"], $arParams["RESIZE_HEIGHT"])):
      $arImages[$key]["FILE_PATH_BROWSE_SMALL"] = $arParams["FILE_PATH_VIEW_RESIZE"] . $image["FILE_NAME"];
    endif;
  endforeach;

  return ($arImages) ? $arImages : false;
}
?>