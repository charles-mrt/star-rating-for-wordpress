# star rating shortcode for Wordpress.

# Descripition
- star rating for wordpress adds a list of stars to rate a product or post through shortcode. 

# Model
<p align="center">
 <img src="https://i.ibb.co/GVzkqTN/rate-starts.png" alt="rate-starts" border="0">
</p>

# technology 
 - PHP - WORDPRESS.

## technology available to run your application

<strong> 1º </strong>Project installation 
- Follow the instructions below.

```bash
# wordpress installation
https://br.wordpress.org/support/


Runs the application in development mode.
- Access your browser with the address: (http://localhost:domain-name).

```
<strong> 2º </strong>add code in theme functions.php 

<strong> 3º </strong>how to add shortcode.
- Follow the instructions below.

```bash
# When editing posts, pages or plugins that accept editing or shortcodes add the shortcode below;
# default shortcode - auto render total 5 stars not highlighted, aligment = center, font-size = 16px, color of highlighted stars = orange
# [star_rate rated_stars="3"]

# custom shortcode - can edit star rating parameters ex:
# [star_rate total_stars="5" rated_stars="3" color_rated_stars="orange" alignment="center" font-size="22px" ];

# star_rate: is the name of shortcode.
# total_stars: limit of stars: support 0 to 5. 
# rated_stars: stars highlighted stars: support 0 to 5.
# color_rated_stars: color of highlighted stars: support color name or hexadecimal;
# alignment: support text alignment: center, left, right.
# font-size: support font size.

```

# License MIT
<p align="center">
  <a href="https://github.com/charles-mrt/toolge-post-grid/blob/main/LICENSE" target="_blank">Login for more information</a>
</p>


