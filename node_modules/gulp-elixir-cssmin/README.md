## Usage

Elixir extension for laravel. This extension optimizes and minifies your CSS code.

```
var elixir = require('laravel-elixir');
require('gulp-elixir-cssmin');

elixir(function (mix) {
  mix.cssmin();
});
```

This will go through your `public/css/` directory for all files. Instead, if you only want to compile a single file, you may do:

```
mix.cssmin("app.css");
```

Finally, if you'd like to output to a different directory than the default `public/css`, then you may override this as well.

```
mix.stylus("app.css", "public/min");
```
