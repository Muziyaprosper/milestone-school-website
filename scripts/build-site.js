const fs = require("fs");
const path = require("path");
const { minify: minifyJs } = require("terser");
const CleanCSS = require("clean-css");

const ROOT = path.resolve(__dirname, "..");
const OUT = path.join(ROOT, "public");

// Only these get shipped to cPanel - dev tooling (src/, node_modules,
// package.json, configs, docs) stays out of the deployed site.
const COPY_ITEMS = ["assets", "manifest.json", "favicon.ico", "robots.txt", "sitemap.xml", ".htaccess"];
const JS_FILES = ["scripts.js", "cookie-consent.js", "sw.js"];
// Front controller + layout partials/page templates: copied verbatim, never
// run through an HTML minifier since it doesn't understand PHP tags.
const PHP_ITEMS = ["index.php", "includes", "pages"];

async function build() {
  fs.rmSync(OUT, { recursive: true, force: true });
  fs.mkdirSync(OUT, { recursive: true });

  for (const item of COPY_ITEMS) {
    const src = path.join(ROOT, item);
    if (fs.existsSync(src)) {
      fs.cpSync(src, path.join(OUT, item), { recursive: true });
    }
  }

  fs.mkdirSync(path.join(OUT, "dist"), { recursive: true });
  fs.copyFileSync(path.join(ROOT, "dist", "output.css"), path.join(OUT, "dist", "output.css"));

  const customCssPath = path.join(ROOT, "styles", "custom.css");
  if (fs.existsSync(customCssPath)) {
    fs.mkdirSync(path.join(OUT, "styles"), { recursive: true });
    const source = fs.readFileSync(customCssPath, "utf8");
    const result = new CleanCSS({}).minify(source);
    if (result.errors.length) {
      throw new Error(`clean-css failed on styles/custom.css: ${result.errors.join("\n")}`);
    }
    fs.writeFileSync(path.join(OUT, "styles", "custom.css"), result.styles);
  }

  for (const file of JS_FILES) {
    const srcPath = path.join(ROOT, file);
    if (!fs.existsSync(srcPath)) continue;
    const code = fs.readFileSync(srcPath, "utf8");
    const result = await minifyJs(code);
    if (result.error) throw result.error;
    fs.writeFileSync(path.join(OUT, file), result.code);
  }

  for (const item of PHP_ITEMS) {
    const src = path.join(ROOT, item);
    if (fs.existsSync(src)) {
      fs.cpSync(src, path.join(OUT, item), { recursive: true });
    }
  }

  console.log(`Built ${PHP_ITEMS.length} PHP item(s) and ${JS_FILES.length} JS file(s) into ${OUT}`);
}

build().catch((err) => {
  console.error(err);
  process.exit(1);
});
