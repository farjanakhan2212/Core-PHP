<div class='form-group row'>        
    <?php 
    if($config["type"]=="hidden" || $config["type"]=="submit" || $config["type"]=="reset"){         
            
    }else{ 
    echo  "<label for='{$config["name"]}' class='col-sm-2 col-form-label'>{$config["label"]}</label>";
    } 
    ?> 

    <div class='col-sm-10'>

    <?php if(isset($config["table"])){ ?> 
         
        <select id='<?=$config["name"]?>' name='<?=$config["name"]?>' class='form-select' style='width:100%'>";
          
          <?php
          $result=$db->query("select $id,$name from {$tx}{$config["table"]}");
          while(list($id,$name)=$result->fetch_row()){          
            if($id==$config["value"]){
              echo "<option value='$id' selected>$name</option>";  
            }else{
              echo "<option value='$id'>$name</option>";  
            }        
          }?>

          </select>

    <?php  

      }else{//Input tag

            if($config["type"]=="radio" || $config["type"]=="checkbox"){
               $css_class="form-check-input";
            }            
        
            if($config["type"]=="textarea"){

              echo "<textarea class='$css_class' name='{$config["name"]}' id='{$config["name"]}' placeholder='{$config["placeholder"]}' {$config["required"]}>{$config["value"]}</textarea>";        
            
            }elseif($config["type"]=="file"){

              echo  "<input type='{$config["type"]}' class='$css_class' name='{$config["name"]}' id='{$config["name"]}' value='{$config["value"]}' placeholder='{$config["placeholder"]}' {$config["required"]} {$config["checked"]}>";        
            
              if($config["value"]!=""){
                 echo "<img src='{$base_url}/img/{$config["value"]}' width='200' />";
               }       
            
            }else if($config["type"]=="submit"){
               echo "<input type='{$config["type"]}' class='$css_class' name='{$config["name"]}' id='{$config["name"]}' value='{$config["value"]}' placeholder='{$config["placeholder"]}' {$config["required"]} {$config["checked"]}>";        
            }else{
              echo "<input type='{$config["type"]}' class='$css_class' name='{$config["name"]}' id='{$config["name"]}' value='{$config["value"]}' placeholder='{$config["placeholder"]}' {$config["required"]} {$config["checked"]}>"; 
            }
        }
     ?>
 
</div>
</div>