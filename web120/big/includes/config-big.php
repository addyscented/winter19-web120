<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LeSGqAUAAAAAK0iGLn9RKnepSeqdsk-JFRdGA1x";
$secretKey = "6LeSGqAUAAAAAClMYCgL-BGS_B6rqS7xJBYvkhkb";

//this helps elminate PHP date errors

date_default_timezone_set('America/Los Angeles');
//This constant allows a page to know it's own url/name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));



switch(THIS_PAGE)
{    case "index.php":
        $title= "Addy's Examples and BIG Work";
        $logo="fas fa-smile-beam";
        $PageID= "Addy's Examples and BIG Work";
    break;
    
    case "siteapp.php":
        $title= "Responsive vs. Mobile";
        $logo='fas fa-mobile';
        $PageID= "Responsive vs. mobile";
    break;
 
    case "flexbox.php":
        $title= "Flexbox";
        $logo="fab fa-buromobelexperte";
        $PageID= "Flexbox";
    break;
        
     case "galleries.php":
        $title= "Galleries";
        $logo="fas fa-image";
        $PageID="Galleries";
    break;
            
     case "map.php":
        $title= "Map";
        $logo="fas fa-map-marker-alt";
        $PageID= "Maps";
    break;
        
    case "calendar.php":
        $title= "A Calendar";
        $logo="far fa-calendar-alt";
        $PageID= "A Calendar";
    break;
 
    case "youtube.php":
        $title= "YouTube";
        $logo="fab fa-youtube";
        $PageID= "YouTube";
    break;
 
     case "parallax.php":
        $title= "Parallax";
        $logo='';
        $PageID= "Parallax";
    break;
 
    case "shoppingcarts.php":
        $title= "Shopping Carts";
        $logo="fas fa-tags";
        $PageID= "Shopping Carts";
    break;
 
    case "webcam.php":
        $title= "Webcams";
        $logo="fas fa-eye";
        $PageID= "Webcams";
    break;
        
    default:
        $title= THIS_PAGE;
        $logo="";
        $PageID="";
    break;
}