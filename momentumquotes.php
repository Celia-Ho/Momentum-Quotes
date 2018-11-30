<?php

// delete a value from an array using array_diff
function array_delete($value, $array) {
  // make sure 2nd argument is an array
  return array_diff($array, array($value));
}

  $colors = array('red', 'green', 'blue', 'black', 'white', 'purple', 'orange', 'yellow','pink', 'gray', 'brown', 'skyblue');
  $color_count = count($colors);
  // bg color is randomized
  $bg_color = $colors[rand(0,$color_count-1)];

  // Need to ensure text color is not same as background color
  // array_delete function removes selected $bg_color from the array of $colors
  $text_colors = array_delete($bg_color, $colors);
  $text_color_count = count($text_colors);
  // text color is randomized
  $text_color = $text_colors[rand(0,$text_color_count-1)];
  
  // font size is randomized
  $font_size = (50 + (rand(0,10) * 5));
  
  // text align is randomized
  $aligns = array('center', 'left', 'right', 'justify');
  $text_align = $aligns[rand(0,3)];
  
  // style is randomized
  $styles = array('bold', 'italic', 'underline', 'uppercase');
  $style = $styles[rand(0,3)];

  $quotes = array(
  "If you want something you've never had, you must be willing to do something you've never done. - Unknown", 
  "Sometimes thinking too much can destroy your momentum. - Tom Watson", 
  "Hope floats but effort propels. ― Rob Liano", 
  "It’s very simple; just look at your life to see where you’re heading. You’re always in a momentum of something. ― Maria Erving", 
  "It does not matter how slowly you go as long as you do not stop. – Confucius",
  "The step that we are on is only a step to the next place, and no step regardless of how massive is ever a destination. ― Craig D. Lounsbrough",
  "There are no traffic jams along the extra mile. — Roger Staubach",
  "Accept yourself, love yourself, and keep moving forward. If you want to fly, you have to give up what weighs you down. ― Roy T. Bennett",
  "For any movement to gain momentum, it must start with a small action. — Adam Braun");
  $quote_count = count($quotes);
  // quote is randomized
  $quote = $quotes[rand(0,$quote_count-1)];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Momentum Quotes</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: <?php echo $bg_color; ?>;
      color: <?php echo $text_color; ?>;
      font-size: <?php echo $font_size; ?>px;
      text-align: <?php echo $text_align; ?>;
      /* Can't have the same CSS style for all styles so use switch function */
      <?php
      switch($style) {
        case 'bold':
          echo "font-weight: bold;";
          /* need to break to exit the switch otherwise all the following cases will be run */
          break;  
        case 'italic':
          echo "font-style: italic;";
          break;
        case 'underline':
          echo "text-decoration: underline;";
          break;
        case 'uppercase':
          echo "text-transform: uppercase;";
          break;
      }
      ?>
    }
  	</style>
  </head>

  <body>
    <p>
    <?php echo $quote; ?>
    </p>
  </body>
</html>
