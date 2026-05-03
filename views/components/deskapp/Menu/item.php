<li class="dropdown">
    <a href="<?=$arg["route"]?>" class="dropdown-toggle <?=isset($arg["links"])?"":"no-arrow"?>">
  
  <span class="<?=$arg["icon"]?>"></span>
  <span class="mtext"><?=$arg["name"]?></span>
  </a>

  <?php if(isset($arg["links"])){ ?>
	<ul class="submenu">
  <?php foreach($arg["links"] as $link){?>
	 <li><a href="<?=$base_url?>/<?=$link["route"]?>"><?=$link["text"]?></a></li>
   <?php } ?>
	</ul>
 <?php } ?>
 </li>