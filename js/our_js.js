/**
 * Part responsible for scrolling of the content in block along video
 * revorked along code https://stackoverflow.com/questions/38222995/how-to-scroll-div-contents-vertically-in-a-loop-like-news-feed-in-php-page/38239271, 22.8.2021
 */

var i = 0;

$(document).ready(function(){
  var interval = setInterval(function () {
    i += 4; // speed
    $('#container').animate({ scrollTop: i }, 1);
    if (i >= $('#container').prop('scrollHeight') - $('#container').height()) {
      i = 0;
    }
  }, 100);
});

/**
 * Part responsible for creating infinite loop of provided ul elements in block alongsidevideo displaying part
 * revorked along code https://stackoverflow.com/questions/64534951/creating-an-infinite-scroll-loop-with-div-contents, 22.8.2021
 */
document.addEventListener( "DOMContentLoaded", function() {
    // it's a div, that holds your news
    // it holds ul with news in li elements
    var div = document.getElementById( "container" );
    div.addEventListener( "scroll", function() {
      var max_scroll = this.scrollHeight - this.clientHeight;
      var current_scroll = this.scrollTop;
      var bottom = 100;
      if ( current_scroll + bottom >= max_scroll ) {
        var ul = document.getElementsByTagName( "ul" )[ 0 ];
        var current = parseInt( ul.dataset.current, 10 );
        var li = document.getElementsByTagName( "li" )[ current ];
        var new_li = li.cloneNode( true );
        ul.appendChild( new_li );
        ul.dataset.current = current + 1;
      }
    } );
  } );