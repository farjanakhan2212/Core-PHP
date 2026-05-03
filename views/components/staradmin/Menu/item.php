<?php
// $html=<<<HTML
// <li class="nav-item">      
// <a href="$base_url/{$menu['route']}" class="nav-link"> 
//  <i class="{$menu['icon']}"></i>
//  <p>{$menu["name"]}
// HTML;

// if(isset($menu["links"])){
// $html.=<<<HTML
//     <i class="right fas fa-angle-left"></i>
// HTML;
// }
   
// $html.=<<<HTML
// </p>
// </a>
// HTML;

// if(isset($menu["links"])){
//     $html.=<<<HTML
// <ul class="nav nav-treeview">
// HTML;

//     foreach($menu["links"] as $link){     
//         $link["icon"]=isset($link["icon"])?$link["icon"]:"nav-icon far fa-circle";
      
//         $html.=<<<HTML
// <li class="nav-item">
// <a href="$base_url/{$link['route']}" class="nav-link"> <i class="{$link['icon']}"></i><p>{$link["text"]}</p></a>
// </li>
// HTML;
//     }

// $html.=<<<HTML
//    </ul>
// </li>
// HTML;
// }


//---------------PHP----------------------
// $html="<li class=\"nav-item\">";         
// $html.="<a href=\"$base_url/{$menu["route"]}\" class=\"nav-link\">";
 
//  $html.="<i class=\"{$menu["icon"]}\"></i>";
//  $html.="<p>{$menu["name"]}";

//  if(isset($menu["links"])){
//   $html.="<i class=\"right fas fa-angle-left\"></i>";
//  }
 
//  $html.="</p>";
//  $html.="</a>";

//  if(isset($menu["links"])){
//     $html.="<ul class=\"nav nav-treeview\">";
//     foreach($menu["links"] as $link){                
//         $link["icon"]=isset($link["icon"])?$link["icon"]:"nav-icon far fa-circle";

//         $html.="<li class=\"nav-item\">";
//     $html.="<a href=\"$base_url/{$link["route"]}\" class=\"nav-link\"> <i class=\"{$link["icon"]}\"></i><p>{$link["text"]}</p></a>";
//         $html.="</li>";
//     }
//     $html.="</ul>";
// }

// $html.="</li>";
// ?>

<?php
  $html="<li class=\"nav-item\">";
  $html.="<a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"$base_url/{$arg["route"]}\" aria-expanded=\"false\" aria-controls=\"ui-basic\">";
   $html.="<i class=\"{$arg["icon"]}\"></i>";
     $html.=" <span class=\"menu-title\">{$arg["name"]}</span>";
      $html.="<i class=\"menu-arrow\"></i>";
      $html.="</a>";

      if(isset($arg["links"])){
      $html.="<div class=\"collapse\" id=\"{$arg["id"]}\">";
        $html.="<ul class=\"nav flex-column sub-menu\">";
         foreach($arg["links"] as $link){
           $html.="<li class=\"nav-item\"> <a class=\"nav-link\" href=\"$base_url/{$link["route"]}\">{$link["text"]}</a></li>";
         }
       $html.="</ul>";
      $html.="</div>";
      }

    $html.="</li>";

?>
   




