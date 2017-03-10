<?php declare(strict_types = 1);

/*
 * Routes
 */

$this->respond('GET', '/', blog_front_page);
$this->respond('GET', '/[a:post_name]', blog_with_article);

/*
 * Functions
 */

function blog_front_page($request, $response, $service, $app) {
  $article_data = file(__DIR__ . '/../writing/list_of_files');
  $data = explode(',', $article_data[0]);
  $title = str_replace('"', '', $data[0]);
  $file_name = trim($data[1]);
  $full_name = __DIR__ . "/../writing/$file_name";
  $file_contents = file_get_contents($full_name) or die($full_name);
  $app->smarty->assign('article_list', $data);
  $app->smarty->assign('post_name', $title);
  $app->smarty->assign('contents', $file_contents);
  $app->smarty->display('writing.tpl');
};

function blog_with_article($request, $response, $service, $app) {
  $app->smarty->assign('post_name', $request->post_name);
  $app->smarty->display('writing.tpl');
};

