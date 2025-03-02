# WordPress Boilerplate with Bootstrap 5.3.3

## Installation

1\. in themes folder clone this repository
```console
git clone https://github.com/manzourali/Wordpress-Boilerplate-BS5.git
```
or
```console
gh repo clone manzourali/Wordpress-Boilerplate-BS5
```
2\. change the Wordpress-Boilerplate-BS5 folder to YOUR_THEME_NAME
```console
mv Wordpress-Boilerplate-BS5 YOUR_THEME_NAME
```
3\. go to YOUR_THEME_NAME folder
```console
cd YOUR_THEME_NAME
```
4\. Install Required Packages:
```console
npm install
```
5\. Run this command to watch scss files:
```console
npm run watch
```
6\. Add your scss/css style in
```bash
assets
  scss
    style.scss
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
