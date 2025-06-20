<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace CodeIgniter\Config;

use CodeIgniter\Cache\CacheFactory;
use CodeIgniter\Cache\CacheInterface;
use CodeIgniter\CLI\Commands;
use CodeIgniter\CodeIgniter;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Database\MigrationRunner;
use CodeIgniter\Debug\Exceptions;
use CodeIgniter\Debug\Iterator;
use CodeIgniter\Debug\Timer;
use CodeIgniter\Debug\Toolbar;
use CodeIgniter\Email\Email;
use CodeIgniter\Encryption\EncrypterInterface;
use CodeIgniter\Encryption\Encryption;
use CodeIgniter\Filters\Filters;
use CodeIgniter\Format\Format;
use CodeIgniter\Honeypot\Honeypot;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\ContentSecurityPolicy;
use CodeIgniter\HTTP\CURLRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Negotiate;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\URI;
use CodeIgniter\HTTP\UserAgent;
use CodeIgniter\Images\Handlers\BaseHandler;
use CodeIgniter\Language\Language;
use CodeIgniter\Log\Logger;
use CodeIgniter\Pager\Pager;
use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Router\RouteCollectionInterface;
use CodeIgniter\Router\Router;
use CodeIgniter\Security\Security;
use CodeIgniter\Session\Handlers\DatabaseHandler;
use CodeIgniter\Session\Handlers\Database\MySQLiHandler;
use CodeIgniter\Session\Handlers\Database\PostgreHandler;
use CodeIgniter\Session\Session;
use CodeIgniter\Throttle\Throttler;
use CodeIgniter\Typography\Typography;
use CodeIgniter\Validation\Validation;
use CodeIgniter\View\Cell;
use CodeIgniter\View\Parser;
use CodeIgniter\View\RendererInterface;
use CodeIgniter\View\View;
use Config\App;
use Config\Cache;
use Config\ContentSecurityPolicy as CSPConfig;
use Config\Database;
use Config\Email as EmailConfig;
use Config\Encryption as EncryptionConfig;
use Config\Exceptions as ExceptionsConfig;
use Config\Filters as FiltersConfig;
use Config\Format as FormatConfig;
use Config\Honeypot as HoneypotConfig;
use Config\Images;
use Config\Migrations;
use Config\Pager as PagerConfig;
use Config\Services as AppServices;
use Config\Toolbar as ToolbarConfig;
use Config\Validation as ValidationConfig;
use Config\View as ViewConfig;

/**
 * Services Configuration file.
 *
 * Services are simply other classes/libraries that the system uses
 * to do its job. This is used by CodeIgniter to allow the core of the
 * framework to be swapped out easily without affecting the usage within
 * the rest of your application.
 *
 * This is used in place of a Dependency Injection container primarily
 * due to its simplicity, which allows a better long-term maintenance
 * of the applications built on top of CodeIgniter. A bonus side-effect
 * is that IDEs are able to determine what class you are calling
 * whereas with DI Containers there usually isn't a way for them to do this.
 *
 * @see http://blog.ircmaxell.com/2015/11/simple-easy-risk-and-change.html
 * @see http://www.infoq.com/presentations/Simple-Made-Easy
 */
class Services extends BaseService
{
    /**
     * The cache class provides a simple way to store and retrieve
     * complex data for later.
     *
     * @return CacheInterface
     */
    public static function cache(?Cache $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('cache', $config);
        }

        $config ??= new Cache();

        return CacheFactory::getHandler($config);
    }

    /**
     * The CLI Request class provides for ways to interact with
     * a command line request.
     *
     * @return CLIRequest
     */
    public static function clirequest(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('clirequest', $config);
        }

        $config ??= config('App');

        return new CLIRequest($config);
    }

    /**
     * CodeIgniter, the core of the framework.
     *
     * @return CodeIgniter
     */
    public static function codeigniter(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('codeigniter', $config);
        }

        $config ??= config('App');

        return new CodeIgniter($config);
    }

    /**
     * The commands utility for running and working with CLI commands.
     *
     * @return Commands
     */
    public static function commands(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('commands');
        }

        return new Commands();
    }

    /**
     * Content Security Policy
     *
     * @return ContentSecurityPolicy
     */
    public static function csp(?CSPConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('csp', $config);
        }

        $config ??= config('ContentSecurityPolicy');

        return new ContentSecurityPolicy($config);
    }

    /**
     * The CURL Request class acts as a simple HTTP client for interacting
     * with other servers, typically through APIs.
     *
     * @return CURLRequest
     */
    public static function curlrequest(array $options = [], ?ResponseInterface $response = null, ?App $config = null, bool $getShared = true)
    {
        if ($getShared === true) {
            return static::getSharedInstance('curlrequest', $options, $response, $config);
        }

        $config ??= config('App');
        $response ??= new Response($config);

        return new CURLRequest(
            $config,
            new URI($options['base_uri'] ?? null),
            $response,
            $options
        );
    }

    /**
     * The Email class allows you to send email via mail, sendmail, SMTP.
     *
     * @param array|EmailConfig|null $config
     *
     * @return Email
     */
    public static function email($config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('email', $config);
        }

        if (empty($config) || ! (is_array($config) || $config instanceof EmailConfig)) {
            $config = config('Email');
        }

        return new Email($config);
    }

    /**
     * The Encryption class provides two-way encryption.
     *
     * @param bool $getShared
     *
     * @return EncrypterInterface Encryption handler
     */
    public static function encrypter(?EncryptionConfig $config = null, $getShared = false)
    {
        if ($getShared === true) {
            return static::getSharedInstance('encrypter', $config);
        }

        $config ??= config('Encryption');
        $encryption = new Encryption($config);

        return $encryption->initialize($config);
    }

    /**
     * The Exceptions class holds the methods that handle:
     *
     *  - set_exception_handler
     *  - set_error_handler
     *  - register_shutdown_function
     *
     * @return Exceptions
     */
    public static function exceptions(
        ?ExceptionsConfig $config = null,
        ?IncomingRequest $request = null,
        ?Response $response = null,
        bool $getShared = true
    ) {
        if ($getShared) {
            return static::getSharedInstance('exceptions', $config, $request, $response);
        }

        $config ??= config('Exceptions');
        $request ??= AppServices::request();
        $response ??= AppServices::response();

        return new Exceptions($config, $request, $response);
    }

    /**
     * Filters allow you to run tasks before and/or after a controller
     * is executed. During before filters, the request can be modified,
     * and actions taken based on the request, while after filters can
     * act on or modify the response itself before it is sent to the client.
     *
     * @return Filters
     */
    public static function filters(?FiltersConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('filters', $config);
        }

        $config ??= config('Filters');

        return new Filters($config, AppServices::request(), AppServices::response());
    }

    /**
     * The Format class is a convenient place to create Formatters.
     *
     * @return Format
     */
    public static function format(?FormatConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('format', $config);
        }

        $config ??= config('Format');

        return new Format($config);
    }

    /**
     * The Honeypot provides a secret input on forms that bots should NOT
     * fill in, providing an additional safeguard when accepting user input.
     *
     * @return Honeypot
     */
    public static function honeypot(?HoneypotConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('honeypot', $config);
        }

        $config ??= config('Honeypot');

        return new Honeypot($config);
    }

    /**
     * Acts as a factory for ImageHandler classes and returns an instance
     * of the handler. Used like Services::image()->withFile($path)->rotate(90)->save();
     *
     * @return BaseHandler
     */
    public static function image(?string $handler = null, ?Images $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('image', $handler, $config);
        }

        $config ??= config('Images');
        $handler = $handler ?: $config->defaultHandler;
        $class   = $config->handlers[$handler];

        return new $class($config);
    }

    /**
     * The Iterator class provides a simple way of looping over a function
     * and timing the results and memory usage. Used when debugging and
     * optimizing applications.
     *
     * @return Iterator
     */
    public static function iterator(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('iterator');
        }

        return new Iterator();
    }

    /**
     * Responsible for loading the language string translations.
     *
     * @return Language
     */
    public static function language(?string $locale = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('language', $locale)->setLocale($locale);
        }

        // Use '?:' for empty string check
        $locale = $locale ?: AppServices::request()->getLocale();

        return new Language($locale);
    }

    /**
     * The Logger class is a PSR-3 compatible Logging class that supports
     * multiple handlers that process the actual logging.
     *
     * @return Logger
     */
    public static function logger(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('logger');
        }

        return new Logger(config('Logger'));
    }

    /**
     * Return the appropriate Migration runner.
     *
     * @return MigrationRunner
     */
    public static function migrations(?Migrations $config = null, ?ConnectionInterface $db = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('migrations', $config, $db);
        }

        $config ??= config('Migrations');

        return new MigrationRunner($config, $db);
    }

    /**
     * The Negotiate class provides the content negotiation features for
     * working the request to determine correct language, encoding, charset,
     * and more.
     *
     * @return Negotiate
     */
    public static function negotiator(?RequestInterface $request = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('negotiator', $request);
        }

        $request ??= AppServices::request();

        return new Negotiate($request);
    }

    /**
     * Return the appropriate pagination handler.
     *
     * @return Pager
     */
    public static function pager(?PagerConfig $config = null, ?RendererInterface $view = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('pager', $config, $view);
        }

        $config ??= config('Pager');
        $view ??= AppServices::renderer();

        return new Pager($config, $view);
    }

    /**
     * The Parser is a simple template parser.
     *
     * @return Parser
     */
    public static function parser(?string $viewPath = null, ?ViewConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('parser', $viewPath, $config);
        }

        $viewPath = $viewPath ?: config('Paths')->viewDirectory;
        $config ??= config('View');

        return new Parser($config, $viewPath, AppServices::locator(), CI_DEBUG, AppServices::logger());
    }

    /**
     * The Renderer class is the class that actually displays a file to the user.
     * The default View class within CodeIgniter is intentionally simple, but this
     * service could easily be replaced by a template engine if the user needed to.
     *
     * @return View
     */
    public static function renderer(?string $viewPath = null, ?ViewConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('renderer', $viewPath, $config);
        }

        $viewPath = $viewPath ?: config('Paths')->viewDirectory;
        $config ??= config('View');

        return new View($config, $viewPath, AppServices::locator(), CI_DEBUG, AppServices::logger());
    }

    /**
     * The Request class models an HTTP request.
     *
     * @return IncomingRequest
     */
    public static function request(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('request', $config);
        }

        $config ??= config('App');

        return new IncomingRequest(
            $config,
            AppServices::uri(),
            'php://input',
            new UserAgent()
        );
    }

    /**
     * The Response class models an HTTP response.
     *
     * @return Response
     */
    public static function response(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('response', $config);
        }

        $config ??= config('App');

        return new Response($config);
    }

    /**
     * The Redirect class provides nice way of working with redirects.
     *
     * @return RedirectResponse
     */
    public static function redirectresponse(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('redirectresponse', $config);
        }

        $config ??= config('App');
        $response = new RedirectResponse($config);
        $response->setProtocolVersion(AppServices::request()->getProtocolVersion());

        return $response;
    }

    /**
     * The Routes service is a class that allows for easily building
     * a collection of routes.
     *
     * @return RouteCollection
     */
    public static function routes(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('routes');
        }

        return new RouteCollection(AppServices::locator(), config('Modules'));
    }

    /**
     * The Router class uses a RouteCollection's array of routes, and determines
     * the correct Controller and Method to execute.
     *
     * @return Router
     */
    public static function router(?RouteCollectionInterface $routes = null, ?Request $request = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('router', $routes, $request);
        }

        $routes ??= AppServices::routes();
        $request ??= AppServices::request();

        return new Router($routes, $request);
    }

    /**
     * The Security class provides a few handy tools for keeping the site
     * secure, most notably the CSRF protection tools.
     *
     * @return Security
     */
    public static function security(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('security', $config);
        }

        $config ??= config('App');

        return new Security($config);
    }

    /**
     * Return the session manager.
     *
     * @return Session
     */
    public static function session(?App $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('session', $config);
        }

        $config ??= config('App');
        $logger = AppServices::logger();

        $driverName = $config->sessionDriver;

        if ($driverName === DatabaseHandler::class) {
            $DBGroup = $config->sessionDBGroup ?? config(Database::class)->defaultGroup;
            $db      = Database::connect($DBGroup);

            $driver = $db->getPlatform();

            if ($driver === 'MySQLi') {
                $driverName = MySQLiHandler::class;
            } elseif ($driver === 'Postgre') {
                $driverName = PostgreHandler::class;
            }
        }

        $driver = new $driverName($config, AppServices::request()->getIPAddress());
        $driver->setLogger($logger);

        $session = new Session($driver, $config);
        $session->setLogger($logger);

        if (session_status() === PHP_SESSION_NONE) {
            $session->start();
        }

        return $session;
    }

    /**
     * The Throttler class provides a simple method for implementing
     * rate limiting in your applications.
     *
     * @return Throttler
     */
    public static function throttler(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('throttler');
        }

        return new Throttler(AppServices::cache());
    }

    /**
     * The Timer class provides a simple way to Benchmark portions of your
     * application.
     *
     * @return Timer
     */
    public static function timer(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('timer');
        }

        return new Timer();
    }

    /**
     * Return the debug toolbar.
     *
     * @return Toolbar
     */
    public static function toolbar(?ToolbarConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('toolbar', $config);
        }

        $config ??= config('Toolbar');

        return new Toolbar($config);
    }

    /**
     * The URI class provides a way to model and manipulate URIs.
     *
     * @param string $uri
     *
     * @return URI
     */
    public static function uri(?string $uri = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('uri', $uri);
        }

        return new URI($uri);
    }

    /**
     * The Validation class provides tools for validating input data.
     *
     * @return Validation
     */
    public static function validation(?ValidationConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('validation', $config);
        }

        $config ??= config('Validation');

        return new Validation($config, AppServices::renderer());
    }

    /**
     * View cells are intended to let you insert HTML into view
     * that has been generated by any callable in the system.
     *
     * @return Cell
     */
    public static function viewcell(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('viewcell');
        }

        return new Cell(AppServices::cache());
    }

    /**
     * The Typography class provides a way to format text in semantically relevant ways.
     *
     * @return Typography
     */
    public static function typography(bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('typography');
        }

        return new Typography();
    }
}
