<? 

$link[0] = array('link' => 'https://rebrand.ly/showboxhd', 'percent' => 50);
$link[1] = array('link' => 'https://rebrand.ly/moviebox', 'percent' => 50);

$percent_arr = array();
foreach($link as $k => $_l) {
    $percent_arr = array_merge($percent_arr, array_fill(0, $_l['percent'], $k));
}

$random_key = $percent_arr[mt_rand(0,count($percent_arr)-1)];
$redirectlink = $link[$random_key]['link'];

header("Location: $redirectlink");

?>