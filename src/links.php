<?
$json = file_get_contents('links.json');
$data = json_decode($json);

$links = "<ul>";

foreach ($data as $link) {
    $links .= "<li><a href='$link->url' target='_blank'><img src='$link->img' alt='$link->name' height='25px'/> $link->name</a></li>";
}

echo $links . "</ul>";