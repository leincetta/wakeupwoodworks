# Wake Up Woodworks

### Compiling Sass

Using Sass 3.3.7+ and Sass-Globbing:

`sass -r sass-globbing --watch assets/sass:assets/css`

Alternatively a Mixture simple project settings file is included which will compile the Sass + minify for you (as well as much more).

You can also use your preferred methods for compiling sass as long as you have Sass 3.3.7+ and Sass-Globbing enabled.

### Sass file structure

My preferred method is to work along the lines of the SMACSS & BEM method. In the sass folder there there are two folders — base and modules. The base folder has the Sassline base SCSS partials. The modules folder contains some demo SCSS partials with styles you can keep or remove. All new partials added to modules will be compiled into your css so work in here with new files.

## ¯\\\_( Browsers )_/¯

Sassline will set text to the baseline in recent versions of Chrome and Firefox, IE 11+ and Safari 8+.

========

## License

Sassline is licensed under the MIT license. ([http://opensource.org/licenses/MIT](http://opensource.org/licenses/MIT))

[PhotoSwipe](http://photoswipe.com)
[Sassline](http://sassline.com)
Viljami Salminen’s [responsive-nav.js](https://github.com/viljamis/responsive-nav.js)