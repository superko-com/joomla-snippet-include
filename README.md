# Joomla Content Plugin - Snippet Include

A lightweight Joomla content plugin compatible with **Joomla 5 and Joomla 6**. It allows you to dynamically include external PHP, HTML, or JavaScript files directly into Joomla articles using custom shortcodes like `{{snippet_name}}`.

---

## 📁 Recommended Folder Structure

For better organization and security, it is recommended to create a dedicated directory in your Joomla root folder (e.g., `custom-snippets/`) to store all your custom PHP scripts, HTML blocks, or JS files.

```text
Joomla Root/
├── custom-snippets/
│   ├── tools/
│   │   └── calculator.php
│   ├── forms/
│   │   └── contact.php
│   └── banners/
│       └── summer_sale.html
├── plugins/
│   └── content/
│       └── snippetinclude/
│           ├── snippetinclude.php
│           ├── snippetinclude.xml
│           └── snippets.json
```

---

## 📦 Installation Options

You can install and use this plugin in two ways:

### Option A: Standard Installation via Joomla Admin (Recommended)

1. Zip the plugin files (`snippetinclude.php`, `snippetinclude.xml`, `snippets.json`).
2. Log in to your Joomla Administrator Panel.
3. Go to **System** -> **Install** -> **Extensions** and upload the ZIP file.
4. Go to **Plugins**, search for **Content - Snippet Include**, and **Enable** it.

### Option B: Direct FTP / File Manager Upload

If you prefer not to use the zip installer, you can upload the plugin directly to your server:

1. Connect to your server using FTP (e.g., FileZilla) or your hosting File Manager.
2. Navigate to your Joomla root directory and open: `/plugins/content/`
3. Create a new folder named `snippetinclude`: `/plugins/content/snippetinclude/`
4. Upload `snippetinclude.php`, `snippetinclude.xml`, and `snippets.json` directly into this folder.
5. Log in to your Joomla Administrator Panel.
6. Go to **System** -> **Discover** (under Install) and click **Discover**.
7. Select **Content - Snippet Include** and click **Install**.
8. Go to **Plugins**, search for **Content - Snippet Include**, and **Enable** it.

---

## 🛠️ Usage

### 1. Configure your snippet paths in `snippets.json`

Edit `snippets.json` inside the plugin directory (`/plugins/content/snippetinclude/`) and map your shortcodes to relative paths from your Joomla root (`JPATH_ROOT`).

Example `snippets.json`:

```json
{
  "calculator": "custom-snippets/tools/calculator.php",
  "contact_form": "custom-snippets/forms/contact.php",
  "promo_banner": "custom-snippets/banners/summer_sale.html"
}
```

### 2. Insert shortcode into Joomla Article

In your Joomla article content editor, insert the corresponding key inside double curly braces:

```html
<p>Here is my custom PHP calculator:</p>

{{calculator}}

<p>And here is an HTML banner:</p>

{{promo_banner}}
```

---

## 🌐 Powered By / Live Examples

This plugin is actively used in production to seamlessly integrate dynamic PHP tools, card readings, and interactive generators directly into Joomla content. Check out these live examples:

- 🔮 **[Juperko.com](https://juperko.com)** – Secondary project running custom PHP and JS integrations.
- 👼 **[Juperko - Angel Cards](https://www.juperko.com/angel-cards)** – An interactive Angel Card reading application rendered flawlessly inside standard Joomla content using this exact plugin.
- 🔮 **[Superko.com](https://superko.com)** – Main project utilizing the plugin for various interactive tools and content modules.
- 🎴 **[Výklad karet online](https://www.superko.com/karty)** – A central hub for interactive tarot and card reading scripts embedded via snippets.
- 🃏 **[Andělské karty](https://www.superko.com/vyklad-3-karty)** – A specific live example of a PHP-driven 3-card spread tool integrated safely into a Joomla article.


---

## 📜 License

Distributed under the MIT License. Free for personal and commercial use.
