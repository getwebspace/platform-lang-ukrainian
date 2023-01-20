<?php declare(strict_types=1);

namespace Plugin\LangUkrainian;

use App\Domain\AbstractPlugin;
use Psr\Container\ContainerInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class LangUkrainianPlugin extends AbstractPlugin
{
    const NAME = 'LangUkrainianPlugin';
    const TITLE = 'Українська мова';
    const AUTHOR = 'Sofiia Skladanivska';
    const AUTHOR_SITE = 'https://getwebspace.org';
    const VERSION = '1.1.1';

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);

        $this->addLocaleFromFile('uk-UA', __DIR__ . '/Locale/_.php');

        $this->addLocaleTranslateLetters('uk-UA',
            [
                'А', 'Б', 'В', 'Г', 'Ґ', 'Д', 'Е', 'Є', 'Ж', 'З', 'И', 'І', 'Ї', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П',
                'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ю', 'Я', 'Ь', 'а', 'б', 'в', 'г', 'ґ', 'д', 'е',
                'є', 'ж', 'з', 'и', 'і', 'ї', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц',
                'ч', 'ш', 'щ', 'ю', 'я', 'ь',
            ],
            [
                'A', 'B', 'V', 'H', 'G', 'D', 'E', 'Ye', 'Zh', 'Z', 'Y', 'I', 'Yi', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
                'R', 'S', 'T', 'U', 'F', 'X', 'C', 'Ch', 'Sh', 'Shh', 'Yu', 'Ya', '', 'a', 'b', 'v', 'h', 'g', 'd', 'e',
                'ye', 'zh', 'z', 'y', 'i', 'yi', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'x', 'c',
                'ch', 'sh', 'shh', 'yu', 'ya', '',
            ]
        );
    }
}
