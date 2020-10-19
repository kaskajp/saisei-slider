# Saisei Slider
A super simple full screen autoplaying slider that plays videos, images and iframes.

## Initialization
Nothing fancy here. Just include saisei.js somewhere on your page and then add ```class="saisei-slide"``` to all the images, videos and iframes. See ```example.html``` for more information.

## Options

### Slide playback length
Add ```data-saiseitime="1000"``` (any number in milliseconds) to specify how long your image and iframe slides should show for (defaults to 5000 ms). Videos always play until they end.

## Browser support
Please note that this has not been tested properly and should not blindly be used in production. The intended use for this is for it to run on a Raspberry Pi in kiosk mode, for shops and offices that want to display ads, dashboards etc on their big screens. But hey, it probably works in all modern browsers ;)