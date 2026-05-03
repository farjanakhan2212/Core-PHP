
<?php 
$html="<li><a class=\"has-arrow\" href=\"javascript:void()\" aria-expanded=\"false\">";
 $html.="<i class=\"{$arg["icon"]}\"></i>";
    $html.="<span class=\"nav-text\">{$arg["name"]}</span>";
$html.="</a>";

if(isset($arg["links"])){
    $html.="<ul aria-expanded=\"false\">";    
    foreach($arg["links"] as $link){
        $html.="<li><a href=\"$base_url/{$link["route"]}\">{$link["text"]}</a></li>";
    }
    $html.="</ul>";
}

$html.="</li>";

?>