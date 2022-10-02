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

    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);

        $this->addLocaleFromFile('uk-UA', __DIR__ . '/Locale/_.php');
    }
}
