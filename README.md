# Static content for the WFO public website

This repository if for content that appears on the about pages as part of the World Flora Online public website.

The repository forms a submodule of the live site. This means it can be managed separately by a different group of people with no danger of them breaking the code that runs the dynamic code of the main site.

The intention is to provide _just enough_ functionality to present supporting text and images for the main website it - __NOT to be an implementation of a content management system!__

The functionality is documented below but the data itself should provide a wealth of examples. We should not be introducing new ways to render content each time we add it but using consistent formating throughout. This provides a better user experience. If you are thinking "How do I make it look like X?" and there isn't already and example of X on the site then you are probably going in the wrong direction. Cut and paste is your friend!

## Pages are simple MarkDown files

Content consists of MarkDown files and images arranged into a heirarchy of directories. Code within the main repository parses the URL path to find the MarkDown file. It then converts the content to HTML and embeds it in a page with the headers, footers and styling of the main website. (The code that does this is in the main website in a file called page.php and it uses a library called ParseDown.)

## Top level menu items

There is one PHP file in this repository called config.php. This file defines the links that appear in the header of the main website and is included by that code. These menu items are rendered on every page load of the website and so we need the increased efficiency that comes with having them compiled/optimised into the code rather than relying on reading and parsing a MarkDown file each time.

Changes to these menu items are likely to be rare but if needed the structure of the file is simple and well documented.

## Links - relative or absolute?

This repository is embedded as a submodule within the main website in a directory called `pages` in the web root. This means that links within the MarkDown files can be relative to each other. It is recommended that, for example, images are stored in the same directory as the page they are embedded in and just linked to by their file names. Other files can be linked to by relative link e.g. `../news/my_news_item.md`.

## Images file size <- IMPORTANT

There is no mechanism to resize images or optimise them for serving on the web. If you take a picture from a modern digital camera or phone it will be far too large and will take a long time to download into the users page. __Don't upload unprocessed images__.

The actual size images are displayed is controlled by the styling of the page and the viewing device so you don't need to resize images to precise dimensions just so they are roughly right. Here are some simple rules.

   1. The images are being used to illustrate the text. This is not an image gallery. 
   1. __Big images__ These will be displayed across the entire width of the text on the page.
      1. Favour landscape format images, even crop them to be more letterbox/panoramic shaped. If you don't do this they will appear too big.
      2. Image files should be a minimum of 1,500 pixels ideally 2,000 pixels and no more than 2,500 pixels wide.
   2. __Smaller images__ 
      1. Favour square or portrait format images.
      2. Image files should ideally be around 800 pixels wide unless you specifically want them to appear smaller (see below).
   3. Keep the original image files incase you want to upload different versions later.
   4. Consider applying a sharpen for screen filter __after__ you have resized the image - but don't over do it!
   5. Favour JPG format for photos and PNG for graphics (logos) especially if they contain transparency.

## Images - special treatment

MarkDown doesn't provide any styling for how images should be displayed. This wouldn't look very good in a normal website so we have some simple rules that are apply using stylesheets when they are displayed as part of the main website.

### Big images

By default images are displayed the full width of the text block. This is done using the standard way of including images in MarkDown. They should be placed on a line of their own with a blank line above and below.

```


![Jardín Botánico Canario Viera y Clavijo](Canario-viera.jpg)

```
### Floated left/right images

When a smaller image illustrates the content of a paragraph then it looks good to have it aligned to the left or right and have the text flow around it. This is common in printed material but should be used with caution in web pages as when they are viewed on a mobile device the image can appear too small or the flowing of text can not work correctly. To achieve this effect in the MarkDown files we end the alt text in the image link with ~left or ~right like this.

```


![Jardín Botánico Canario Viera y Clavijo ~left](Canario-viera.jpg). This is the text that will wrap around
image. 

```

These images are displayed at a _maximum_ of 15% of the width of the text. If you want a very small logo to appear at the start of a paragraph you could upload a small image file and it will be displayed at its pixel size - if that size is less that 15% of the width of the text block. Otherwize stick with the 800 pixel width suggested above.

### Grids of images

If a bunch of images are included in the same block in MarkDown and tagged with ~grid at the end of the alt text then they will be displayed in a row that fills the entire width of the text, each image being resized appropriately. If you subsequent blocks of images are added then a grid of images is produced. The code below will probduce a grid with six images on the first row and three on the second. Each of the images in this example are also links and will respond when the mouse is hovered over them.

```

[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)

[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)
[![Fun on the beach ~grid](test.jpg)](pages/tens.md)

```

## Lists 

It is common to have sets of things that need to have a web page each and to displayed lists of links to these pages. In the WFO we have a minimum of Taxonomic Expert Networks, Consortium Members and News Items. To achieve this in a semi-automated way with simple MarkDown files we have implemented a form of directory browsing. 

If the URL of a directory under `/pages/` is requested then a directory listing is displayed. This is done recursively into subdirectories with the name of each subdirectory being used as a subheading on the page and the files in that page being linked to as list items.

Image files are excluded from the file listing but other files are included so as to allow for download of MS Word and PDF documents.

For the link text, underscores in the file name are replaced with spaces and the `.md` ending of MarkDown files is removed. Other file endings kept.

All lists are in alphabetical, ascending order unless the first item in the file list starts with a date of the form `2026-03-12_` in which case they are sorted in reverse alphabetical order and the date part of the file name is removed in the link text. This allows for news items / blog roll style lists of items.

The directory is checked for an `index.md` file before the list is rendered. If present then the content of this file is included above the list. This allows for a heading and explanatory text.

## Headers

It can be useful to have a small header that is common across similar pages. This is particularly useful when items form part of a list and we need to be able to navigate to the list they are part of.

When any MarkDown file is render a check is done for a `header.md` file in the same directory and if it is present it is included at the start of any content.
