# bookfinder
PHP Code to Display Bibliographic Information Above Maps From Primo's "Locate" Button.

#ABOUT:
While it is possible to load PNG or JPEG files to a server to display from Primo without any enhancements, this option only sends the user to a map without more explanation of how to find the book.  With this PHP code you can display the title, call number, and location of the book along with the map of the spot in your library where the book is located.

#INSTALLATION
1.  Load bookfinder.php to a publicly-accessible server.
2.  Upload image files to the same directory on the same server.  Make sure they are given the names of your location codes.
3.  In "Integration Profiles" Under Alma-> General Administration -> General Configuration -> Configuration Menu -> Integration Profiles, add a URL pointing to the files you uploaded in step on.  The URL must be formatted as follows: http://YOURDOMAIN.edu/maps/geturl.php/?title={title}&callno={call_number}&location_code={location_code}&location_name={location_name}
4.  Save your changes.

Contact: Tyler Rogers, San Diego State University Library
