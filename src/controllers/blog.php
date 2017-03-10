<?php declare(strict_types = 1);

require_once __DIR__ . '/../../vendor/autoload.php';

// This file stores all of the articles to post on the blog
define('LIST_FILE', __DIR__ . '/../writing/list_of_files');

/*
 * Routes
 */

$this->respond('GET', '/', blog_front_page);
$this->respond('GET', '/[a:post_name]', blog_with_article);


/*
 * Functions
 */

function blog_front_page($request, $response, $service, $app) {
    $article_data = file(LIST_FILE);
    $data = explode(',', $article_data[0]);
    $title = str_replace('"', '', $data[0]);
    $file_contents = get_article_text(trim($data[1]));
    $app->smarty->assign('article_list', get_all_article_titles());
    $app->smarty->assign('post_name', $title);
    $app->smarty->assign('contents', $file_contents);
    $app->smarty->display('writing.tpl');
};

function blog_with_article($request, $response, $service, $app) {
    $app->smarty->assign('post_name', $request->post_name);
    $app->smarty->display('writing.tpl');
};

/*
 * Helper functions
 */

function get_article_text($title): string {
    $full_name = __DIR__ . "/../writing/$title";
    $file_contents = file_get_contents($full_name);
    if ($file_contents === false) {
        throw new \Exception;
    }
    return $file_contents;
}

function get_all_article_titles() {
    $article_data = file(LIST_FILE);
    $titles = array();
    foreach ($article_data as $article) {
        $data = explode(',', $article);
        $title = trim(str_replace('"', '', $data[0]));
        $link = trim(str_replace('"', '', $data[1]));
        array_push($titles, array('title' => $title, 'link' => $link));
    }
    return $titles;
}
