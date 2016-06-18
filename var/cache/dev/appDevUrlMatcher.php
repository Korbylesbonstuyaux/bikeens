<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/61be012')) {
                // _assetic_61be012
                if ($pathinfo === '/images/61be012.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '61be012',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_61be012',);
                }

                // _assetic_61be012_0
                if ($pathinfo === '/images/61be012_Visuel-jeux-concours-4_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '61be012',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_61be012_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/102cc8e')) {
                // _assetic_102cc8e
                if ($pathinfo === '/images/102cc8e.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '102cc8e',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_102cc8e',);
                }

                // _assetic_102cc8e_0
                if ($pathinfo === '/images/102cc8e_map-montpellier-Bikeens-430x344_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '102cc8e',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_102cc8e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/e94056c')) {
                // _assetic_e94056c
                if ($pathinfo === '/images/e94056c.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e94056c',  'pos' => NULL,  '_format' => 'jpg',  '_route' => '_assetic_e94056c',);
                }

                // _assetic_e94056c_0
                if ($pathinfo === '/images/e94056c_logoMAIF_1.jpg') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e94056c',  'pos' => 0,  '_format' => 'jpg',  '_route' => '_assetic_e94056c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/35104e9')) {
                // _assetic_35104e9
                if ($pathinfo === '/images/35104e9.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '35104e9',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_35104e9',);
                }

                // _assetic_35104e9_0
                if ($pathinfo === '/images/35104e9_logo-Mangopay_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '35104e9',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_35104e9_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/af7ebf9')) {
            // _assetic_af7ebf9
            if ($pathinfo === '/css/af7ebf9.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af7ebf9',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_af7ebf9',);
            }

            // _assetic_af7ebf9_0
            if ($pathinfo === '/css/af7ebf9_index_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'af7ebf9',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_af7ebf9_0',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // bikeens_platform_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bikeens_platform_homepage');
            }

            return array (  '_controller' => 'Bikeens\\PlatformBundle\\Controller\\InfoController::indexAction',  '_route' => 'bikeens_platform_homepage',);
        }

        // bikeens_platform_info
        if ($pathinfo === '/info') {
            return array (  '_controller' => 'Bikeens\\PlatformBundle\\Controller\\InfoController::indexAction',  '_route' => 'bikeens_platform_info',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
