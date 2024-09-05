
### Instructions:

- setup a local wordpress environment. This project uses Astra as a parent. Should be easy to customize and use your own theme.
- activate this project as current "child theme", with astra as parent (in wp admin)

- npm init -y
- npm install webpack webpack-cli
- npm install css-loader mini-css-extract-plugin sass sass-loader
- added in packag.json then add in Scripts:{"dev": "webpack"}
- npm run dev (runs webpack, which uses src/app.scss and src/app.js to generate /dist/ files, which are used in functions.php)
- Visit your website and sass should work, along with Bootstrap.
