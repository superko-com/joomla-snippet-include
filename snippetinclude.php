<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class PlgContentSnippetinclude extends CMSPlugin
{
    public function onContentPrepare($context, &$article, &$params, $limit = 0)
    {
        if (empty($article->text)) {
            return;
        }

        // Povolit {{ tag }} i {{tag}}
        $pattern = '/\{\{\s*([a-zA-Z0-9_\-]+)\s*\}\}/';

        if (!preg_match_all($pattern, $article->text, $matches)) {
            return;
        }

        // Cesta k JSON mapě
        $file = __DIR__ . '/snippets.json';

        if (!file_exists($file)) {
            $article->text .= "<!-- snippets.json nenalezen -->";
            return;
        }

        $map = json_decode(file_get_contents($file), true);

        if (!$map) {
            $article->text .= "<!-- snippets.json je neplatný -->";
            return;
        }

        foreach ($matches[1] as $snippet) {

            if (!isset($map[$snippet])) {
                $article->text = preg_replace(
                    '/\{\{\s*' . preg_quote($snippet, '/') . '\s*\}\}/',
                    "<!-- snippet '$snippet' nenalezen -->",
                    $article->text
                );
                continue;
            }

            $path = JPATH_ROOT . '/' . $map[$snippet];

            if (!file_exists($path)) {
                $article->text = preg_replace(
                    '/\{\{\s*' . preg_quote($snippet, '/') . '\s*\}\}/',
                    "<!-- soubor '$path' neexistuje -->",
                    $article->text
                );
                continue;
            }

            ob_start();
            include $path;
            $output = ob_get_clean();

            $article->text = preg_replace(
                '/\{\{\s*' . preg_quote($snippet, '/') . '\s*\}\}/',
                $output,
                $article->text
            );
        }
    }
}
