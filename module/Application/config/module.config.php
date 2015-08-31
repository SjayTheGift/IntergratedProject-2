<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
return array(
    'static_salt' => 'aFGQ475SDsdfsaf2342',
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'about' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/about',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'about',
                    ),
                ),
                'child_routes' => array(
                    'legal' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/legal',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'legal',
                            ),
                        ),
                    ),
                    'business' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/business',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'business',
                            ),
                        ),
                    ),
                ),
            ),
            'gallery' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/gallery',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'gallery',
                    ),
                ),
                'child_routes' => array(
                    'photos' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/photos',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'photos',
                            ),
                        ),
                    ),
                    'videos' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/videos',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'videos',
                            ),
                        ),
                    ),
                ),
            ),
            'volunteering' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/volunteering',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'volunteering',
                    ),
                ),
            ),
            'projects' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/projects',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'projects',
                    ),
                ),
                'child_routes' => array(
                    'intake' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/intake',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'intake',
                            ),
                        ),
                    ),
                    'children' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/children',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'children',
                            ),
                        ),
                    ),
                    'outreach' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/outreach',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'outreach',
                            ),
                        ),
                    ),
                    'prevention' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/prevention',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'prevention',
                            ),
                        ),
                    ),
                ),
            ),
            'donate' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/donate',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'donate',
                    ),
                ),
                'child_routes' => array(
                    'myschool' => array(
                        'type' => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route' => '/myschool',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'myschool',
                            ),
                        ),
                    ),
                    'youdonate' => array(
                        'type' => 'Zend\Mvc\Router\Http\Literal',
                        'options' => array(
                            'route' => '/youdonate',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Index',
                                'action' => 'youdonate',
                            ),
                        ),
                    ),
                ),
            ),
            'contactus' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/contactus',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action' => 'contactus',
                    ),
                ),
            ),
            'register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Registration',
                        'action' => 'register',
                    ),
                ),
            ),
            'login' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/login',
                    'defaults' => array(
                        'controller' => 'Application\Controller\index',
                        'action' => 'login',
                    ),
                ),
            ),
            'thankYou' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/thankYou',
                    'defaults' => array(
                        'controller' => 'Application\Controller\index',
                        'action' => 'thankYou',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    //all routes registered here should be literal routes
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'HOME',
                'route' => 'home',
            ),
            array(
                'label' => 'ABOUT US',
                'route' => 'about',
                'action' => 'about',
            ),
            array(
                'label' => 'GALLERY',
                'route' => 'gallery',
                'pages' => array(
                    array(
                        'label' => 'PHOTOS',
                        'route' => 'photos',
                        'action' => 'photos',
                    ),
                    array(
                        'label' => 'Videos',
                        'route' => 'videos',
                        'action' => 'videos',
                    )
                ),
            ),
            array(
                'label' => 'OUR PROJECTS',
                'route' => 'projects',
                'action' => 'projects',
            ),
            array(
                'label' => 'VOLUNTEERING',
                'route' => 'volunteering',
                'action' => 'volunteering',
            ),
            array(
                'label' => 'DONATE',
                'route' => 'donate',
                'action' => 'donate',
            ),
            array(
                'label' => 'CONTACT',
                'route' => 'contact',
                'action' => 'contact',
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
            'Zend\Authentication\AuthenticationService' => 'my_auth_service',
        ),
        'invokables' => array(
            'my_auth_service' => 'Zend\Authentication\AuthenticationService',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Registration' => 'Application\Controller\RegistrationController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
