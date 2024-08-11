<?php
include(get_template_directory().'/configs/theme.php');

function create_theme($theme_name = null){
  // ------ config & create main theme dir ---------------
  $now = date('YmdHis');
  if(empty($theme_name)){
    $theme_name = 'theme';
  }
  $main_theme_dir = get_template_directory().'/downloads'.'/'.$theme_name.'-'.$now;
  if (!file_exists($main_theme_dir)) {
      mkdir($main_theme_dir, 0755, true);
  }

  // ------ Load files ---------------
  // style.css
  $source_file_style_css = $destination_file_style_css = $style_css_content = null;
  $source_file_style_css = get_template_directory().'/style.css';
  $destination_file_style_css = $main_theme_dir.'/style.css';
  copy($source_file_style_css, $destination_file_style_css);
  $style_css_content = file_get_contents($source_file_style_css);
  $style_css_content = str_replace('{{*theme-name*}}', $theme_name, $style_css_content);
  file_put_contents($destination_file_style_css, $style_css_content);

  // Copy styles directory
  $source_styles_dir = get_template_directory().'/styles';
  $destination_styles_dir = $main_theme_dir.'/styles';
  copy_directory($source_styles_dir, $destination_styles_dir);

  // Copy base theme files
  $base_files = ['archive.php', 'functions.php', 'index.php', 'page.php', 'single.php'];
  foreach ($base_files as $file) {
      $source_file = get_template_directory().'/'.$file;
      $destination_file = $main_theme_dir.'/'.$file;
      copy($source_file, $destination_file);
  }
  
  // Compress the new theme directory into a zip file
  $zip_file = $main_theme_dir . '.zip';
  zip_directory($main_theme_dir, $zip_file);

  // Remove the new theme directory and its contents
  remove_directory($main_theme_dir);
}


// ------ functions ---------------
// Function to copy directories recursively
function copy_directory($src, $dst) {
  $dir = opendir($src);
  if (!file_exists($dst)) {
      mkdir($dst, 0755, true);
  }
  while(false !== ($file = readdir($dir))) {
      if (($file != '.') && ($file != '..')) {
          if (is_dir($src . '/' . $file)) {
              copy_directory($src . '/' . $file, $dst . '/' . $file);
          } else {
              copy($src . '/' . $file, $dst . '/' . $file);
          }
      }
  }
  closedir($dir);
}

// Function to zip a directory
function zip_directory($src, $zip_file) {
  $zip = new ZipArchive();
  if ($zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
      $files = new RecursiveIteratorIterator(
          new RecursiveDirectoryIterator($src),
          RecursiveIteratorIterator::LEAVES_ONLY
      );
      foreach ($files as $name => $file) {
          if (!$file->isDir()) {
              $file_path = $file->getRealPath();
              $relative_path = substr($file_path, strlen($src) + 1);
              $zip->addFile($file_path, $relative_path);
          }
      }
      $zip->close();
  }
}

// Function to remove a directory and its contents
function remove_directory($dir) {
  if (!is_dir($dir)) {
      return;
  }
  $items = new RecursiveIteratorIterator(
      new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
      RecursiveIteratorIterator::CHILD_FIRST
  );
  foreach ($items as $item) {
      if ($item->isDir()) {
          rmdir($item->getRealPath());
      } else {
          unlink($item->getRealPath());
      }
  }
  rmdir($dir);
}