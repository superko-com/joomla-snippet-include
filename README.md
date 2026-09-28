# Joomla Content Plugin - Snippet Include

A lightweight Joomla content plugin compatible with **Joomla 5 & Joomla 6**. It allows you to dynamically include external PHP, HTML, or JavaScript files directly into Joomla articles using custom shortcodes like `{{snippet_name}}`.

---

## 📁 Recommended Folder Structure

For better organization and security, it is recommended to create a dedicated directory in your Joomla root folder (e.g., `custom-snippets/`) to store all your custom PHP scripts, HTML blocks, or JS files.

**Example structure:**
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


📦 Installation Options

You can install and use this plugin in two ways:
Option A: Standard Installation via Joomla Admin (Recommended)

    Zip the plugin files (snippetinclude.php, snippetinclude.xml, snippets.json).
    Log in to your Joomla Administrator Panel.
    Go to System -> Install -> Extensions and upload the ZIP file.
    Go to Plugins, search for Content - Snippet Include, and Enable it.

Option B: Direct FTP / File Manager Upload

If you prefer not to use the zip installer, you can upload the plugin directly to your server:

    Connect to your server using FTP (e.g., FileZilla) or your hosting File Manager.
    Navigate to your Joomla root directory and open:
    /plugins/content/
    Create a new folder named snippetinclude:
    /plugins/content/snippetinclude/
    Upload snippetinclude.php, snippetinclude.xml, and snippets.json directly into this folder.
    Log in to your Joomla Administrator Panel.
    Go to System -> Discover (under Install) and click Discover.
    Select Content - Snippet Include and click Install.
    Go to Plugins, search for Content - Snippet Include, and Enable it.


🛠️ Usage
1. Configure your snippet paths in snippets.json

Edit snippets.json inside the plugin directory (/plugins/content/snippetinclude/) and map your shortcodes to relative paths from your Joomla root (JPATH_ROOT).

Example snippets.json:

{
  "calculator": "custom-snippets/tools/calculator.php",
  "contact_form": "custom-snippets/forms/contact.php",
  "promo_banner": "custom-snippets/banners/summer_sale.html"
}


2. Insert shortcode into Joomla Article

In your Joomla article content editor, insert the corresponding key inside double curly braces:
HTML

<p>Here is my custom PHP calculator:</p>

{{calculator}}

<p>And here is an HTML banner:</p>

{{promo_banner}}

📜 License
Distributed under the MIT License. Free for personal and commercial use.
