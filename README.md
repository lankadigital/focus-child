# Fabula Channel Theme
Wordpress child theme extending the Focus theme by siteorigin intended for video sites

## Changelog

### 1.3.3

**TL;DR:** Minor bugfixes

* Files changed
  * js/main.js
    * Removed smooth scrolling due to jagginess
  * style.css
    * Fixed border styling in sub navigation

### 1.3.2

**TL;DR:** Bugfixes and minor tweaks

* Files changed
  * front-page.php
    * Removed conflicting `data-toggle="tab"` from sub navigation links
  * functions.php
    * Renamed and properly enqueued main.js to match the change in filename
  * js/fishing.js > js/main.js
    * Changed filename to main.js
    * Fixed sub navigation active states
    * Shortened code by using variables instead of multiple `if` statements
    * Made `hashchange` trigger on `$(document).ready` only if there is a hash
    * Added smooth scrolling
  * style.css
    * Incremented version number
    * Fixed sub navigation on certain screen widths

### 1.3.1

**TL;DR:** Bugfixes and minor visual tweaks.

* Files changed
  * front-page.php
    * Fixes to sub navigation
  * header.php
    * Removed [Google Font](https://www.google.com/fonts) Aldrich
    * Loaded [Google Font](https://www.google.com/fonts) Glegoo 
  * js/fishing.js
    * Fixes to sub navigation
  * style.css
    * Incremented version number
    * Changed main heading font to Glegoo
    * Styling fixes to sub navigation
    * Other minor visual tweaks

### 1.3.0

**TL;DR:** Made series page show a video tagged "intro", hid Facebook link if empty, customized search result page title, made theme more universally adaptable, fixed series description styling, added this changelog.

* Files changed
  * category.php
    * Added class `.category content` to content area
    * Made featured video always be the one tagged "intro"
    * Changed underscores into dashes in getting template part `posts-by-category`
  * category-nostot.php
    * Changed underscores into dashes in getting template part `posts-by-category`
  * category-tulossa.php
    * Changed underscores into dashes in getting template part `posts-by-category`
  * coming-episodes.php
    * Added a [Font Awesome](http://fortawesome.github.io/Font-Awesome/) play icon after the excerpt
    * Changed the text shown when no upcoming episodes were found
  * footer.php
    * Added logic to hide the Facebook icon if no valid Facebook Page URL is provided
  * front-page.php
    * Changed "kanava-esittely" to "kanavaesittely"
    * Added missing "kanavaesittely" to the mobile version of the sub navigation
    * Changed underscores into dashes is getting template parts `latest-posts` and `popular-videos`
  * functions.php
    * Added border-bottom styling to the sub navigation
    * Added a filter and a function to customize the `wp_title` on the search results page
  * js/fishing.js
    * Attempts to fix "active" class behavior in the sub navigation
  * latest-posts.php
    * Changed underscore in filename into a dash
    * Added a `posts_per_page` limit of 30
    * Saved categories to be excluded into variables to allow use in any WordPress installation
  * popular-videos.php
    * Changed underscore in filename into a dash
  * posts-by-category.php
    * Changed underscore in filename into a dash
    * Raised the `posts_per_page` limit from 7 to 99
    * Saved categories to be excluded into variables to allow use in any WordPress installation
  * README.md
    * Added this changelog
  * series-for-index.php
    * Saved categories to be excluded into variables to allow use in any WordPress installation
    * Changed category ordering from `title, ascending` to `modified, descending`
  * series-list.php
    * Changed underscore in filename into a dash
    * Saved categories to be excluded into variables to allow use in any WordPress installation
  * single.php
    * Changed underscores into dashes in getting template part `posts-by-category`
  * style.css
    * Incremented version number
    * Changed `.content-container` padding from `1px 30px 30px 30px` to `10px 30px 30px 30px`
    * Changed `.loop-container` bottom padding from `0` to `30px`
    * Added styling for `.fabulareferee-hr`
    * Changed `.index-wrapper` top margin from `10px` to `25px`
    * Changed `.category-description-bg` height from `95.4%` to `90.4%`
    * Changed `.category-description-bg` background color from `rgba(0,0,0,0.84)` to `rgba(0,0,0,0.34)`
    * Added styling for `.category-content .fluid-width-video-wrapper`
    * Added styling for `.category-description-bg div`
    * Changed `.subnav-tabs, .dropdown-menu-front` background color from `#1d1d1d` to `#181818`
    * Other minor visual tweaks

### 1.2.0

**TL;DR:** New template for contact pages, added word limiting functionality and fixed the slider. Changed theme name.

* Files changed
  * functions.php
    * Added a word limiter function
  * page-contact.php (NEW)
    * Created a new template for contact pages
  * series-for-index.php
    * Implemented the new word limiting functionality for series descriptions
  * slider.php
    * Limited excerpts to 20 characters
  * style.css
    * Changed theme name
    * Incremented version number
    * Fixed slider `z-index` problem
    * Added styling for contact page
    * Removed styling for pseudo-class `.entry-title-category:hover`
    * Removed styling for class `.grey-bg`
    * Other minor visual tweaks
    
### 1.1.1

**TL;DR:** Made channel name dynamic.

* Files changed
  * front-page.php
    * Replaced hard coded channel name with dynamic text from WordPress Customizer
  * functions.php
    * Added channel name to Wordpress Customizer
  * style.css
    * Incremented version number
    
### 1.1.0
* Files changed
  * category.php
    * Moved category info box from next to the video to under it
  * functions.php
    * Made sure child theme stylesheet gets enqueued
    * Added class `.index-more .fa` to customizeable color scheme
  * header.php
    * Removed absolute paths and replaced them with $path variable
  * style.css
    * Changed repo name
    * Incremented version number
    * Added styling for class `.category-description-bg`
    * Added different styling for devices under 761px wide for class `.category-description-bg`