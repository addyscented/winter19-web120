
<?php

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{    case "index.php":
        $PageID= "Gorptapes.com";
    break;
    
    case "about.php":
        $PageID= "About Gorptapes";
    break;
 
    case "shop.php":
    
        $PageID= "Shop and Archive";
    break;
        
     case "news.php":
      
        $PageID="New Stuff";
    break;
            
     case "contact.php":
      
        $PageID= "Contact Gorp";
    break;

        
    default:
    
        $PageID=THIS_PAGE;
    break;
}
?>