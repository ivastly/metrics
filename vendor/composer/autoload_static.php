<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit153b497b303bc6fb6a79f44ddf37ec8e
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Slim\\' => 5,
        ),
        'R' => 
        array (
            'Ramsey\\Uuid\\' => 12,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
            'ParagonIE\\EasyDB\\' => 17,
            'ParagonIE\\Corner\\' => 17,
        ),
        'M' => 
        array (
            'MeetMatt\\Metrics\\Server\\' => 24,
            'MeetMatt\\Metrics\\Client\\' => 24,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Ramsey\\Uuid\\' => 
        array (
            0 => __DIR__ . '/..' . '/ramsey/uuid/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'ParagonIE\\EasyDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/easydb/src',
        ),
        'ParagonIE\\Corner\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/corner/src',
        ),
        'MeetMatt\\Metrics\\Server\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Server',
        ),
        'MeetMatt\\Metrics\\Client\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Client',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'Interop\\Container\\ContainerInterface' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/ContainerInterface.php',
        'Interop\\Container\\Exception\\ContainerException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/ContainerException.php',
        'Interop\\Container\\Exception\\NotFoundException' => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container/Exception/NotFoundException.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Exception\\AccessDeniedException' => __DIR__ . '/../..' . '/src/Server/Domain/Exception/AccessDeniedException.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Exception\\NotFoundException' => __DIR__ . '/../..' . '/src/Server/Domain/Exception/NotFoundException.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Exception\\UnauthorizedException' => __DIR__ . '/../..' . '/src/Server/Domain/Exception/UnauthorizedException.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Identity\\RandomIdGeneratorInterface' => __DIR__ . '/../..' . '/src/Server/Domain/Identity/RandomIdGeneratorInterface.php',
        'MeetMatt\\Metrics\\Server\\Domain\\TaskList\\TaskList' => __DIR__ . '/../..' . '/src/Server/Domain/TaskList/TaskList.php',
        'MeetMatt\\Metrics\\Server\\Domain\\TaskList\\TaskListCollection' => __DIR__ . '/../..' . '/src/Server/Domain/TaskList/TaskListCollection.php',
        'MeetMatt\\Metrics\\Server\\Domain\\TaskList\\TaskListRepositoryInterface' => __DIR__ . '/../..' . '/src/Server/Domain/TaskList/TaskListRepositoryInterface.php',
        'MeetMatt\\Metrics\\Server\\Domain\\TaskList\\TaskListService' => __DIR__ . '/../..' . '/src/Server/Domain/TaskList/TaskListService.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Task\\Task' => __DIR__ . '/../..' . '/src/Server/Domain/Task/Task.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Task\\TaskCollection' => __DIR__ . '/../..' . '/src/Server/Domain/Task/TaskCollection.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Task\\TaskRepositoryInterface' => __DIR__ . '/../..' . '/src/Server/Domain/Task/TaskRepositoryInterface.php',
        'MeetMatt\\Metrics\\Server\\Domain\\Task\\TaskService' => __DIR__ . '/../..' . '/src/Server/Domain/Task/TaskService.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\LoginService' => __DIR__ . '/../..' . '/src/Server/Domain/User/LoginService.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\PasswordHashingServiceInterface' => __DIR__ . '/../..' . '/src/Server/Domain/User/PasswordHashingServiceInterface.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\RegistrationService' => __DIR__ . '/../..' . '/src/Server/Domain/User/RegistrationService.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\Token' => __DIR__ . '/../..' . '/src/Server/Domain/User/Token.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\TokenRepositoryInterface' => __DIR__ . '/../..' . '/src/Server/Domain/User/TokenRepositoryInterface.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\User' => __DIR__ . '/../..' . '/src/Server/Domain/User/User.php',
        'MeetMatt\\Metrics\\Server\\Domain\\User\\UserRepositoryInterface' => __DIR__ . '/../..' . '/src/Server/Domain/User/UserRepositoryInterface.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Container\\DomainServiceProvider' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Container/DomainServiceProvider.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Container\\InfrastructureServiceProvider' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Container/InfrastructureServiceProvider.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Container\\PresentationServiceProvider' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Container/PresentationServiceProvider.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Cryptography\\PasswordHashingService' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Cryptography/PasswordHashingService.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Cryptography\\RandomIdGenerator' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Cryptography/RandomIdGenerator.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Http\\Middleware\\ErrorResponseMiddleware' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Http/Middleware/ErrorResponseMiddleware.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Http\\Middleware\\TokenAuthMiddleware' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Http/Middleware/TokenAuthMiddleware.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Mysql\\TaskListRepository' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Mysql/TaskListRepository.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Mysql\\TaskRepository' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Mysql/TaskRepository.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Mysql\\UserRepository' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Mysql/UserRepository.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Redis\\LazyRedisConnection' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Redis/LazyRedisConnection.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Redis\\RedisConnectionInterface' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Redis/RedisConnectionInterface.php',
        'MeetMatt\\Metrics\\Server\\Infrastructure\\Redis\\TokenRepository' => __DIR__ . '/../..' . '/src/Server/Infrastructure/Redis/TokenRepository.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\ActionAbstract' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/ActionAbstract.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\CreateAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/CreateAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\CreateTaskAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/CreateTaskAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\DeleteAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/DeleteAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\DeleteTaskAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/DeleteTaskAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\GetAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/GetAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\GetManyAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/GetManyAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\GetTasksAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/GetTasksAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\TaskList\\MarkTaskAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/TaskList/MarkTaskAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\User\\LoginAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/User/LoginAction.php',
        'MeetMatt\\Metrics\\Server\\Presentation\\Http\\User\\RegisterAction' => __DIR__ . '/../..' . '/src/Server/Presentation/Http/User/RegisterAction.php',
        'ParagonIE\\Corner\\CornerInterface' => __DIR__ . '/..' . '/paragonie/corner/src/CornerInterface.php',
        'ParagonIE\\Corner\\CornerTrait' => __DIR__ . '/..' . '/paragonie/corner/src/CornerTrait.php',
        'ParagonIE\\Corner\\Error' => __DIR__ . '/..' . '/paragonie/corner/src/Error.php',
        'ParagonIE\\Corner\\Exception' => __DIR__ . '/..' . '/paragonie/corner/src/Exception.php',
        'ParagonIE\\EasyDB\\EasyDB' => __DIR__ . '/..' . '/paragonie/easydb/src/EasyDB.php',
        'ParagonIE\\EasyDB\\EasyStatement' => __DIR__ . '/..' . '/paragonie/easydb/src/EasyStatement.php',
        'ParagonIE\\EasyDB\\Exception\\ConstructorFailed' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/ConstructorFailed.php',
        'ParagonIE\\EasyDB\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/ExceptionInterface.php',
        'ParagonIE\\EasyDB\\Exception\\InvalidIdentifier' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/InvalidIdentifier.php',
        'ParagonIE\\EasyDB\\Exception\\InvalidTableName' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/InvalidTableName.php',
        'ParagonIE\\EasyDB\\Exception\\MustBeArrayOrEasyStatement' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/MustBeArrayOrEasyStatement.php',
        'ParagonIE\\EasyDB\\Exception\\MustBeOneDimensionalArray' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/MustBeOneDimensionalArray.php',
        'ParagonIE\\EasyDB\\Exception\\QueryError' => __DIR__ . '/..' . '/paragonie/easydb/src/Exception/QueryError.php',
        'ParagonIE\\EasyDB\\Factory' => __DIR__ . '/..' . '/paragonie/easydb/src/Factory.php',
        'Pimple\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Container.php',
        'Pimple\\Exception\\ExpectedInvokableException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/ExpectedInvokableException.php',
        'Pimple\\Exception\\FrozenServiceException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/FrozenServiceException.php',
        'Pimple\\Exception\\InvalidServiceIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/InvalidServiceIdentifierException.php',
        'Pimple\\Exception\\UnknownIdentifierException' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Exception/UnknownIdentifierException.php',
        'Pimple\\Psr11\\Container' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/Container.php',
        'Pimple\\Psr11\\ServiceLocator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Psr11/ServiceLocator.php',
        'Pimple\\ServiceIterator' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceIterator.php',
        'Pimple\\ServiceProviderInterface' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/ServiceProviderInterface.php',
        'Pimple\\Tests\\Fixtures\\Invokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Invokable.php',
        'Pimple\\Tests\\Fixtures\\NonInvokable' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/NonInvokable.php',
        'Pimple\\Tests\\Fixtures\\PimpleServiceProvider' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/PimpleServiceProvider.php',
        'Pimple\\Tests\\Fixtures\\Service' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Fixtures/Service.php',
        'Pimple\\Tests\\PimpleServiceProviderInterfaceTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleServiceProviderInterfaceTest.php',
        'Pimple\\Tests\\PimpleTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/PimpleTest.php',
        'Pimple\\Tests\\Psr11\\ContainerTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Psr11/ContainerTest.php',
        'Pimple\\Tests\\Psr11\\ServiceLocatorTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/Psr11/ServiceLocatorTest.php',
        'Pimple\\Tests\\ServiceIteratorTest' => __DIR__ . '/..' . '/pimple/pimple/src/Pimple/Tests/ServiceIteratorTest.php',
        'Psr\\Container\\ContainerExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerExceptionInterface.php',
        'Psr\\Container\\ContainerInterface' => __DIR__ . '/..' . '/psr/container/src/ContainerInterface.php',
        'Psr\\Container\\NotFoundExceptionInterface' => __DIR__ . '/..' . '/psr/container/src/NotFoundExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Ramsey\\Uuid\\BinaryUtils' => __DIR__ . '/..' . '/ramsey/uuid/src/BinaryUtils.php',
        'Ramsey\\Uuid\\Builder\\DefaultUuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/DefaultUuidBuilder.php',
        'Ramsey\\Uuid\\Builder\\DegradedUuidBuilder' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/DegradedUuidBuilder.php',
        'Ramsey\\Uuid\\Builder\\UuidBuilderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Builder/UuidBuilderInterface.php',
        'Ramsey\\Uuid\\Codec\\CodecInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/CodecInterface.php',
        'Ramsey\\Uuid\\Codec\\GuidStringCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/GuidStringCodec.php',
        'Ramsey\\Uuid\\Codec\\OrderedTimeCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/OrderedTimeCodec.php',
        'Ramsey\\Uuid\\Codec\\StringCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/StringCodec.php',
        'Ramsey\\Uuid\\Codec\\TimestampFirstCombCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/TimestampFirstCombCodec.php',
        'Ramsey\\Uuid\\Codec\\TimestampLastCombCodec' => __DIR__ . '/..' . '/ramsey/uuid/src/Codec/TimestampLastCombCodec.php',
        'Ramsey\\Uuid\\Converter\\NumberConverterInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/NumberConverterInterface.php',
        'Ramsey\\Uuid\\Converter\\Number\\BigNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/BigNumberConverter.php',
        'Ramsey\\Uuid\\Converter\\Number\\DegradedNumberConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Number/DegradedNumberConverter.php',
        'Ramsey\\Uuid\\Converter\\TimeConverterInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/TimeConverterInterface.php',
        'Ramsey\\Uuid\\Converter\\Time\\BigNumberTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/BigNumberTimeConverter.php',
        'Ramsey\\Uuid\\Converter\\Time\\DegradedTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/DegradedTimeConverter.php',
        'Ramsey\\Uuid\\Converter\\Time\\PhpTimeConverter' => __DIR__ . '/..' . '/ramsey/uuid/src/Converter/Time/PhpTimeConverter.php',
        'Ramsey\\Uuid\\DegradedUuid' => __DIR__ . '/..' . '/ramsey/uuid/src/DegradedUuid.php',
        'Ramsey\\Uuid\\Exception\\InvalidUuidStringException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/InvalidUuidStringException.php',
        'Ramsey\\Uuid\\Exception\\UnsatisfiedDependencyException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UnsatisfiedDependencyException.php',
        'Ramsey\\Uuid\\Exception\\UnsupportedOperationException' => __DIR__ . '/..' . '/ramsey/uuid/src/Exception/UnsupportedOperationException.php',
        'Ramsey\\Uuid\\FeatureSet' => __DIR__ . '/..' . '/ramsey/uuid/src/FeatureSet.php',
        'Ramsey\\Uuid\\Generator\\CombGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/CombGenerator.php',
        'Ramsey\\Uuid\\Generator\\DefaultTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/DefaultTimeGenerator.php',
        'Ramsey\\Uuid\\Generator\\MtRandGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/MtRandGenerator.php',
        'Ramsey\\Uuid\\Generator\\OpenSslGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/OpenSslGenerator.php',
        'Ramsey\\Uuid\\Generator\\PeclUuidRandomGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidRandomGenerator.php',
        'Ramsey\\Uuid\\Generator\\PeclUuidTimeGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/PeclUuidTimeGenerator.php',
        'Ramsey\\Uuid\\Generator\\RandomBytesGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomBytesGenerator.php',
        'Ramsey\\Uuid\\Generator\\RandomGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomGeneratorFactory.php',
        'Ramsey\\Uuid\\Generator\\RandomGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomGeneratorInterface.php',
        'Ramsey\\Uuid\\Generator\\RandomLibAdapter' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/RandomLibAdapter.php',
        'Ramsey\\Uuid\\Generator\\SodiumRandomGenerator' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/SodiumRandomGenerator.php',
        'Ramsey\\Uuid\\Generator\\TimeGeneratorFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/TimeGeneratorFactory.php',
        'Ramsey\\Uuid\\Generator\\TimeGeneratorInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Generator/TimeGeneratorInterface.php',
        'Ramsey\\Uuid\\Provider\\NodeProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/NodeProviderInterface.php',
        'Ramsey\\Uuid\\Provider\\Node\\FallbackNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/FallbackNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\Node\\RandomNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/RandomNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\Node\\SystemNodeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Node/SystemNodeProvider.php',
        'Ramsey\\Uuid\\Provider\\TimeProviderInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/TimeProviderInterface.php',
        'Ramsey\\Uuid\\Provider\\Time\\FixedTimeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Time/FixedTimeProvider.php',
        'Ramsey\\Uuid\\Provider\\Time\\SystemTimeProvider' => __DIR__ . '/..' . '/ramsey/uuid/src/Provider/Time/SystemTimeProvider.php',
        'Ramsey\\Uuid\\Uuid' => __DIR__ . '/..' . '/ramsey/uuid/src/Uuid.php',
        'Ramsey\\Uuid\\UuidFactory' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidFactory.php',
        'Ramsey\\Uuid\\UuidFactoryInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidFactoryInterface.php',
        'Ramsey\\Uuid\\UuidInterface' => __DIR__ . '/..' . '/ramsey/uuid/src/UuidInterface.php',
        'Slim\\App' => __DIR__ . '/..' . '/slim/slim/Slim/App.php',
        'Slim\\CallableResolver' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolver.php',
        'Slim\\CallableResolverAwareTrait' => __DIR__ . '/..' . '/slim/slim/Slim/CallableResolverAwareTrait.php',
        'Slim\\Collection' => __DIR__ . '/..' . '/slim/slim/Slim/Collection.php',
        'Slim\\Container' => __DIR__ . '/..' . '/slim/slim/Slim/Container.php',
        'Slim\\DefaultServicesProvider' => __DIR__ . '/..' . '/slim/slim/Slim/DefaultServicesProvider.php',
        'Slim\\DeferredCallable' => __DIR__ . '/..' . '/slim/slim/Slim/DeferredCallable.php',
        'Slim\\Exception\\ContainerException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/ContainerException.php',
        'Slim\\Exception\\ContainerValueNotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/ContainerValueNotFoundException.php',
        'Slim\\Exception\\InvalidMethodException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/InvalidMethodException.php',
        'Slim\\Exception\\MethodNotAllowedException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/MethodNotAllowedException.php',
        'Slim\\Exception\\NotFoundException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/NotFoundException.php',
        'Slim\\Exception\\SlimException' => __DIR__ . '/..' . '/slim/slim/Slim/Exception/SlimException.php',
        'Slim\\Handlers\\AbstractError' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/AbstractError.php',
        'Slim\\Handlers\\AbstractHandler' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/AbstractHandler.php',
        'Slim\\Handlers\\Error' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Error.php',
        'Slim\\Handlers\\NotAllowed' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/NotAllowed.php',
        'Slim\\Handlers\\NotFound' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/NotFound.php',
        'Slim\\Handlers\\PhpError' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/PhpError.php',
        'Slim\\Handlers\\Strategies\\RequestResponse' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponse.php',
        'Slim\\Handlers\\Strategies\\RequestResponseArgs' => __DIR__ . '/..' . '/slim/slim/Slim/Handlers/Strategies/RequestResponseArgs.php',
        'Slim\\Http\\Body' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Body.php',
        'Slim\\Http\\Cookies' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Cookies.php',
        'Slim\\Http\\Environment' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Environment.php',
        'Slim\\Http\\Headers' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Headers.php',
        'Slim\\Http\\Message' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Message.php',
        'Slim\\Http\\Request' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Request.php',
        'Slim\\Http\\RequestBody' => __DIR__ . '/..' . '/slim/slim/Slim/Http/RequestBody.php',
        'Slim\\Http\\Response' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Response.php',
        'Slim\\Http\\StatusCode' => __DIR__ . '/..' . '/slim/slim/Slim/Http/StatusCode.php',
        'Slim\\Http\\Stream' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Stream.php',
        'Slim\\Http\\UploadedFile' => __DIR__ . '/..' . '/slim/slim/Slim/Http/UploadedFile.php',
        'Slim\\Http\\Uri' => __DIR__ . '/..' . '/slim/slim/Slim/Http/Uri.php',
        'Slim\\Interfaces\\CallableResolverInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CallableResolverInterface.php',
        'Slim\\Interfaces\\CollectionInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/CollectionInterface.php',
        'Slim\\Interfaces\\Http\\CookiesInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/CookiesInterface.php',
        'Slim\\Interfaces\\Http\\EnvironmentInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/EnvironmentInterface.php',
        'Slim\\Interfaces\\Http\\HeadersInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/Http/HeadersInterface.php',
        'Slim\\Interfaces\\InvocationStrategyInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/InvocationStrategyInterface.php',
        'Slim\\Interfaces\\RouteGroupInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteGroupInterface.php',
        'Slim\\Interfaces\\RouteInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouteInterface.php',
        'Slim\\Interfaces\\RouterInterface' => __DIR__ . '/..' . '/slim/slim/Slim/Interfaces/RouterInterface.php',
        'Slim\\MiddlewareAwareTrait' => __DIR__ . '/..' . '/slim/slim/Slim/MiddlewareAwareTrait.php',
        'Slim\\Routable' => __DIR__ . '/..' . '/slim/slim/Slim/Routable.php',
        'Slim\\Route' => __DIR__ . '/..' . '/slim/slim/Slim/Route.php',
        'Slim\\RouteGroup' => __DIR__ . '/..' . '/slim/slim/Slim/RouteGroup.php',
        'Slim\\Router' => __DIR__ . '/..' . '/slim/slim/Slim/Router.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit153b497b303bc6fb6a79f44ddf37ec8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit153b497b303bc6fb6a79f44ddf37ec8e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit153b497b303bc6fb6a79f44ddf37ec8e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit153b497b303bc6fb6a79f44ddf37ec8e::$classMap;

        }, null, ClassLoader::class);
    }
}