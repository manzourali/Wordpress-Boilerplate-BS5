# WordPress Boilerplate with Bootstrap 5.3.3

## Installation

1\. Install Required Packages
2\. in themes folder/YOUR_THEME_NAME clone this repository
3\. Install packages:
```console
npm install
```

## Scripts

Update your package.json to include the following scripts:

```console
"scripts": {
  "build:rtl": "sass assets/scss/style.scss | postcss --use postcss-rtl --use cssnano --output ../style.min.css",
  "watch": "chokidar 'assets/scss/**/*.scss' -c 'npm run build:rtl'"
}
```

**Script Descriptions**

- build:rtl: Compiles SCSS to CSS, converts it to RTL, and minifies the output.
- watch: Watches for changes in the assets/scss folder and runs build:rtl automatically.