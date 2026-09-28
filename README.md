# joomla-snippet-include
Joomla plugin to include external PHP, HTML, or JS files into articles using shortcodes.

# Joomla Content Plugin - Snippet Include

A lightweight Joomla content plugin that allows you to dynamically include external PHP, HTML, or JavaScript files directly into Joomla articles using custom shortcodes like `{{snippet_name}}`.

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
